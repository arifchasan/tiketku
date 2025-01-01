<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;
use App\Models\PembelianModel;
use App\Models\PembelianDetailModel;

class Event extends BaseController
{
    public function __construct()
    {
        helper('form');

        $this->session = session();
        $this->user_model = new UserModel();
        $this->event_model = new EventModel();
        $this->tiket_model = new TiketModel();
        $this->pembelian_model = new PembelianModel();
        $this->pembelian_detail_model = new PembelianDetailModel();
    }

    public function detail($id=null): string
    {
        $event = $this->event_model->detail($id)->getResultArray();
        $eo = $this->user_model->find($event[0]['user_id']);
        $tiket = $this->tiket_model->list_by_event($event[0]['event_id'])->getResultArray();
        // var_dump($tiket);die;

        $data = array(
            'event' => $event[0],
            'eo' => $eo,
            'tiket' => $tiket
        );

        return view('event_detail', $data);
    }

    public function detail_post($id=null)
    {
    	if($this->session->get('user') == false)
        {
            $this->session->setFlashdata('success', '<strong>Sebelum membeli, silahkan login atau daftar terlebih dahulu.</strong>');
        	return redirect()->to('/sign-in');
        }
        else
        {
        	$user_id = $this->session->get('user')['user_id'];
        	$kode = substr(strtoupper(sha1($user_id.$id.rand())), 0, 20);

        	// var_dump($_POST);die;
        	$total_harga = 0;
        	$is_buy = 0;

        	foreach ($_POST['tiket'] as $key => $v) {

        		$tiket = $this->tiket_model->find($key);
        		$total_harga = $total_harga + ($tiket['harga'] * $v);

        		if($v > 0)
        		{
        			$is_buy = 1;
        		}
        	}

        	if($is_buy == 0)
        	{
        		return redirect()->to('/event/'.$id);
        	}

        	$link_pembayaran = $this->xendit_call($kode, $total_harga);

        	$pembelian = array(
        		'user_id' => $user_id,
        		'event_id' => $id,
        		'kode' => $kode,
        		'link_pembayaran' => $link_pembayaran,
        		'tanggal_pembelian' => date('Y-m-d H:i:s'),
        		'total_harga' => $total_harga,
        		'status' => 'pending',
        	);

        	$pembelian_id = $this->pembelian_model->insert($pembelian, true);

        	foreach ($_POST['tiket'] as $key => $v) {

        		$tiket = $this->tiket_model->find($key);
        		$total_harga = $total_harga + ($tiket['harga'] * $v);

        		$pembelian_detail = array(
	        		'pembelian_id' => $pembelian_id,
	        		'tiket_id' => $tiket['tiket_id'],
	        		'jumlah' => $v,
	        		'harga' => $tiket['harga'],
	        		'total' => $tiket['harga'] * $v
	        	);

        		$this->pembelian_detail_model->save($pembelian_detail);
	        	// var_dump($pembelian_detail);die;
        	}

        	return redirect()->to('/event/checkout/'.$pembelian_id);
        }
    }

    public function checkout($id=null): string
    {
        $pembelian = $this->pembelian_model->find($id);
        $pembelian_detail = $this->pembelian_detail_model->list_by_pembelian($id)->getResultArray();
        $event = $this->event_model->find($pembelian['event_id']);


        $data = array(
            'pembelian' => $pembelian,
            'pembelian_detail' => $pembelian_detail,
            'event' => $event,
        );

        return view('event_checkout', $data);
    }

    private function xendit_call($code='', $amount)
    {
    	//XENDIT PAYMENT GATEWAY
        $ch = curl_init( 'https://api.xendit.co/v2/invoices' );
        # Setup request to send json via POST.
        $payload = json_encode( array( 
            "external_id" => '#TIKETKU-'.$code,
            "amount" => $amount,
            "description" => 'Pesanan Tiket #TIKETKU-'.$code,
            "success_redirect_url"=> base_url('dashboard/pembeli/tiket/'.$code),
        ) );

        curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Authorization: Basic '.base64_encode('xnd_development_WVsNnc9KX1OGn9V9OJlSLwjDyPZlTE61Ke0NLNYCEPvjsnKxebarfrZmwZkAYD:')
        ));
        # Return response instead of printing.
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        # Send request.
        $result = curl_exec($ch);
        curl_close($ch);
        # Print response.
        $url = json_decode($result);
        $url = $url->invoice_url;

        return $url;
    }

    //XENDIT CALLBACK
    public function xendit_callback()
    {
        $rawRequestInput = file_get_contents("php://input");
        // Baris ini melakukan format input mentah menjadi array asosiatif
        $arrRequestInput = json_decode($rawRequestInput, true);
        print_r($arrRequestInput);

        $_id = $arrRequestInput['id'];
        $_externalId = $arrRequestInput['external_id'];
        $_userId = $arrRequestInput['user_id'];
        $_status = $arrRequestInput['status'];
        $_paidAmount = $arrRequestInput['paid_amount'];
        $_paidAt = $arrRequestInput['paid_at'];
        $_paymentChannel = $arrRequestInput['payment_channel'];
        $_paymentDestination = $arrRequestInput['payment_destination'];

        $kode = explode('-', $_externalId);
        $pembelian = $this->pembelian_model->data_by_kode($kode[1])->getResultArray();
        $pembelian = $pembelian[0];

        if($_status == 'PAID')
        {
            $_status = 'sukses';
        }
        else
        {
            $_status = 'gagal';
        }


        $this->pembelian_model->update($pembelian['pembelian_id'], [
            'status' => $_status
        ]);
    }
}
