<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;
use App\Models\PembelianModel;
use App\Models\PembelianDetailModel;

class Pembeli extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->session = session();

        if($this->session->get('user') == false)
        {
            header("Location: ". base_url());
            die();
        }

        $this->user_model = new UserModel();
        $this->event_model = new EventModel();
        $this->tiket_model = new TiketModel();
        $this->pembelian_model = new PembelianModel();
        $this->pembelian_detail_model = new PembelianDetailModel();
    }

    public function index()
    {
    	return view('dashboard/pembeli');
    }

    public function profile()
    {
        $data = array(
            'profile' => $this->user_model->find($this->session->get('user')['user_id'])
        );

        return view('dashboard/profile_pembeli', $data);
    }

    public function profile_post()
    {
        if (! $this->validate([
            'nama' => [
                'label'  => 'Nama',
                'rules'  => 'required',
            ],
            'email' => [
                'label'  => 'Email',
                'rules'  => 'required|min_length[3]',
            ],
            'telp' => [
                'label'  => 'Telp',
                'rules'  => 'required|min_length[3]',
            ],
            'password_old' => [
                'label'  => 'Password Lama',
                'rules'  => 'permit_empty',
            ],
            'password_new' => [
                'label'  => 'Password Baru',
                'rules'  => 'permit_empty',
            ],
        ])) {
            // The validation fails, so returns the form.
            $this->session->setFlashdata('error', '<strong>Error!</strong>');
            return $this->profile();
        }

        $post = $this->validator->getValidated();

        $data = array(
            'nama' => $post['nama'], 
            'email' => $post['email'], 
            'telp' => $post['telp'], 
        );

        $this->user_model->update($this->session->get('user')['user_id'], $data);

        if(!empty($post['password_old']))
        {
            $profile = $this->user_model->find($this->session->get('user')['user_id']);

            if(sha1($post['password_old']) != $profile['password'])
            {
                $this->session->setFlashdata('error', '<strong>Error! Password lama salah</strong>');
                // echo 'sini';die;
                return $this->profile();
            }
            else
            {
                $this->user_model->update($this->session->get('user')['user_id'], array('password' => sha1($post['password_new'])));
            }
        }

        $this->session->setFlashdata('success', '<strong>Sukses Update data!</strong>');

        return redirect()->to('/dashboard/pembeli/profile');
    }

    public function tiket()
    {
        $lists = $this->pembelian_model->list_by_pembeli($this->session->get('user')['user_id'])->getResultArray();

        $data = array(
            'lists' => $lists
        );

        // var_dump($lists);die;
        return view('dashboard/tiket_pembeli', $data);
    }

    public function tiket_invoice($kode)
    {
        $tiket = $this->pembelian_model->data_by_kode($kode)->getResultArray();
        $tiket = $tiket[0];

        // var_dump($tiket);die;
        $tiket['user'] = $this->user_model->find($tiket['user_id']);
        $tiket['event'] = $this->event_model->find($tiket['event_id']);

        $data = array(
            'tiket' => $tiket
        );

        // var_dump($lists);die;
        return view('dashboard/invoice', $data);
    }
}