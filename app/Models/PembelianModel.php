<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = "tb_pembelian";
    protected $primaryKey = "pembelian_id";
    protected $allowedFields = ['user_id', 'event_id', 'kode', 'link_pembayaran', 'tanggal_pembelian', 'total_harga', 'status'];

    public function list_by_pembeli($user_id)
    {
        return $this->select('*, tb_pembelian.status as status')->join('tb_event','tb_event.event_id = tb_pembelian.event_id', 'left')->where('tb_pembelian.user_id', $user_id)->get();
    }


    public function data_by_kode($kode)
    {
        return $this->where('kode', $kode)->get();
    }

    public function dashboard_total_event($user_id)
    {
        return $this->select('count(*) as total')->groupBy('event_id')->where('user_id', $user_id)->get();
    }

    public function dashboard_total_tiket($user_id)
    {
        return $this->select('sum(jumlah) as total')->join('tb_pembelian_detail', 'tb_pembelian_detail.pembelian_id = tb_pembelian.pembelian_id')->where('user_id', $user_id)->get();
    }

    public function dashboard_total_tiket_eo($user_id)
    {
        return $this->select('sum(jumlah) as total')->join('tb_pembelian_detail', 'tb_pembelian_detail.pembelian_id = tb_pembelian.pembelian_id')->join('tb_event','tb_event.event_id = tb_pembelian.event_id', 'left')->where('tb_event.user_id', $user_id)->get();
    }

    public function dashboard_total_pembelian($user_id)
    {
        return $this->select('sum(total) as total')->join('tb_pembelian_detail', 'tb_pembelian_detail.pembelian_id = tb_pembelian.pembelian_id')->where('user_id', $user_id)->get();
    }

    public function dashboard_total_pembelian_eo($user_id)
    {
        return $this->select('sum(total) as total')->join('tb_pembelian_detail', 'tb_pembelian_detail.pembelian_id = tb_pembelian.pembelian_id')->join('tb_event','tb_event.event_id = tb_pembelian.event_id', 'left')->where('tb_event.user_id', $user_id)->get();
    }
    
}

