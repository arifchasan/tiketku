<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;

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
    }

    public function index()
    {
    	return view('dashboard/pembeli');
    }

    public function profile()
    {
    	return view('dashboard/profile_pembeli');
    }

    public function tiket()
    {
        return view('dashboard/tiket_pembeli');
    }
}