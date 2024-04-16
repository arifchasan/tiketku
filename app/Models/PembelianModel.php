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
    
}

