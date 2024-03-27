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

    public function list_published_by_time()
    {

        return $this->where('status', 'publish')->where('waktu > ', date('Y-m-d H:i:s'))->orderBy('waktu', 'ASC')->get();
    }

    public function detail($id)
    {

        return $this->select('MONTHNAME(waktu) as monthname, DAY(waktu) as datename, tb_event.*')->where('status', 'publish')->where('event_id', $id)->get();
    }
}

