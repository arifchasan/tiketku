<?php

namespace App\Controllers;
use App\Models\UserModel;

class Dev extends BaseController
{
	public function __construct()
    {
    	helper('form');

        $this->session = session();
        $this->user_model = new UserModel();
    }

    public function email($key): string
    {
        $user = $this->user_model->find_by_key($key);

        $data = array(
            'user' => $user
        );

        return view('dev/email-forgot-password', $data);
    }
}
