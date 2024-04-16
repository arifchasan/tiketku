<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;

use App\Models\UserModel;
use App\Models\EventModel;
use App\Models\TiketModel;
use App\Models\PembelianModel;
use App\Models\PembelianDetailModel;

class Admin extends BaseController
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
        $this->pembelian_model = new PembelianModel();
        $this->pembelian_detail_model = new PembelianDetailModel();
    }

    public function index()
    {
    	return view('dashboard/admin');
    }

    public function profile()
    {
    	return view('dashboard/profile_admin');
    }

    public function event()
    {
        $lists = $this->event_model->findAll();

        $data = array(
            'lists' => $lists
        );

        // var_dump($lists);die;
        return view('dashboard/event_admin', $data);
    }

    public function user()
    {
        $lists = $this->user_model->findAll();

        $data = array(
            'lists' => $lists
        );

        // var_dump($lists);die;
        return view('dashboard/user_admin', $data);
    }

    public function setstatus($status, $id)
    {
        $this->event_model->update($id, array('status' => $status));
        // var_dump($lists);die;
        return redirect()->to('/dashboard/admin/event');
    }

    public function setuser($status, $id)
    {
        $this->user_model->update($id, array('status' => $status));
        // var_dump($lists);die;
        return redirect()->to('/dashboard/admin/user');
    }

    public function delete($module, $id)
    {
        if($module == 'event')
        {
            $this->event_model->delete($id);
        }
        else if($module == 'user')
        {
            $this->user_model->delete($id);
        }
        
        // var_dump($lists);die;
        return redirect()->to('/dashboard/admin/'.$module);
    }
}