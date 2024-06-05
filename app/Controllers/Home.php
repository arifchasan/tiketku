<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;

class Home extends BaseController
{
    public function __construct()
    {
        helper('form');

        $this->session = session();
        $this->user_model = new UserModel();
        $this->event_model = new EventModel();
        $this->tiket_model = new TiketModel();
    }

    public function index(): string
    {
        $lists = $this->event_model->list_published_by_time()->getResultArray();

        $data = array(
            'lists' => $lists
        );

        return view('index', $data);
    }

    public function about(): string
    {
        return view('about');
    }
}
