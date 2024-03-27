<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelianModel extends Model
{
    protected $table = "tb_pembelian";
    protected $primaryKey = "pembelian_id";
    protected $allowedFields = ['user_id', 'event_id', 'kode', 'link_pembayaran', 'tanggal_pembelian', 'total_harga', 'status'];

    
}

