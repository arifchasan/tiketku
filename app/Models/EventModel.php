<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = "tb_event";
    protected $primaryKey = "event_id";
    protected $allowedFields = ['event_id', 'user_id', 'nama', 'gambar', 'data', 'lokasi', 'deskripsi', 'waktu', 'status'];

    public function list_by_user($user_id)
    {

        return $this->where('user_id', $user_id)->get();
    }
}

