<?php

namespace App\Models;

use CodeIgniter\Model;

class TiketModel extends Model
{
    protected $table = "tb_tiket";
    protected $primaryKey = "tiket_id";
    protected $allowedFields = ['tiket_id', 'event_id', 'nama', 'harga', 'total'];

    public function list_by_event($event_id)
    {

        return $this->where('event_id', $event_id)->get();
    }
}

