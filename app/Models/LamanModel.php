<?php

namespace App\Models;

use CodeIgniter\Model;

class LamanModel extends Model
{
    protected $table = "tb_laman";
    protected $primaryKey = "laman_id";
    protected $allowedFields = ['laman_id', 'nama', 'konten'];

}

