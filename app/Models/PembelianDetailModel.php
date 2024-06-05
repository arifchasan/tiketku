<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianDetailModel extends Model
{
    protected $table = "tb_pembelian_detail";
    protected $primaryKey = "pembelian_detail_id";
    protected $allowedFields = ['pembelian_id', 'tiket_id', 'jumlah', 'harga', 'total'];

    public function list_by_pembelian($pembelian_id)
    {

        return $this->where('pembelian_id', $pembelian_id)->where('jumlah > ', 0)->get();
    }

    public function dashboard_total_tiket_admin()
    {
        return $this->select('sum(jumlah) as total')->get();
    }

    public function dashboard_total_pembelian_admin()
    {
        return $this->select('sum(total) as total')->get();
    }
}

