<?php

//CONTROLLER AUTH

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
	public function __construct()
    {
    	helper('form');

        $this->session = session();
        $this->user_model = new UserModel();
    }

    public function sign_in(): string
    {
        return view('auth/sign-in');
    }

    public function sign_in_post()
    {
        if (! $this->validate([
            'email'  => [
            	'label'  => 'Email',
        		'rules'  => 'required|valid_email|min_length[3]',
            ],
            'password'  => [
            	'label'  => 'Password',
        		'rules'  => 'required|min_length[3]',
            ],
        ])) {
            // The validation fails, so returns the form.
            $this->session->setFlashdata('error', '<strong>Error!</strong>');
            return $this->sign_in();
        }

        $post = $this->validator->getValidated();

        $check = $this->user_model->login($post['email'], $post['password']);

        if(!empty($check))
        {
        	$this->session->set(array('user' => $check));
        	return redirect()->to('/');
        }
        else
        {
        	 $this->session->setFlashdata('error', '<strong>Error! Email atau Password salah. silahkan ulangi.</strong>');
            return $this->sign_in();
        }
    }

    public function sign_up(): string
    {
        return view('auth/sign-up');
    }

    public function sign_up_post()
    {
        if (! $this->validate([
        	'role' => [
            	'label'  => 'Role',
        		'rules'  => 'required',
            ],
            'nama_depan' => [
            	'label'  => 'Nama Depan',
        		'rules'  => 'required|min_length[3]',
            ],
            'nama_belakang' => [
            	'label'  => 'Nama Belakang',
        		'rules'  => 'required|min_length[3]',
            ],
            'email'  => [
            	'label'  => 'Email',
        		'rules'  => 'required|valid_email|min_length[3]|is_unique[tb_user.email]',
            ],
            'telp'  => [
            	'label'  => 'Telepon',
        		'rules'  => 'required|numeric|min_length[3]|is_unique[tb_user.telp]',
            ],
            'password'  => [
            	'label'  => 'Password',
        		'rules'  => 'required|min_length[3]',
            ],
        ])) {
            // The validation fails, so returns the form.
            $this->session->setFlashdata('error', '<strong>Error!</strong>');
            return $this->sign_up();
        }

        
        $post = $this->validator->getValidated();

        $this->user_model->save([
            'nama' => ucwords($post['nama_depan'].' '.$post['nama_belakang']),
            'password' => sha1($post['password']),
            'email' => trim(strtolower($post['email'])),
            'telp' => trim($post['telp']),
            'role' => $post['role'],
            'status' => 'active'
        ]);

        $this->session->setFlashdata('success', '<strong>Success! Silahkan login dengan email anda.</strong>');
        return redirect()->to('sign-in');
    }

    public function forgot_password(): string
    {
        return view('auth/forgot-password');
    }

    public function forgot_password_post()
    {
        if (! $this->validate([
            'email'  => [
            	'label'  => 'Email',
        		'rules'  => 'required|valid_email|min_length[3]',
            ]
        ])) {
            // The validation fails, so returns the form.
            $this->session->setFlashdata('error', '<strong>Error!</strong>');
            return $this->forgot_password();
        }

        $post = $this->validator->getValidated();

        $check = $this->user_model->find_by_email($post['email']);
        // var_dump($check['user_id']);die;

        if(!empty($check))
        {
        	$key_forgot = sha1($check['user_id'].time());

        	$this->user_model->update($check['user_id'], [
        		'key_forgot' => $key_forgot
        	]);

        	$this->session->setFlashdata('success', '<strong>Silahkan cek email anda untuk reset ulang password anda.</strong>');
        	$this->session->setFlashdata('key_forgot', $key_forgot);

        	return redirect()->to('/forgot-password');
        }
        else
        {
        	$this->session->setFlashdata('error', '<strong>Error! Tidak ditemukan email.</strong>');
            return $this->forgot_password();
        }
    }

    public function forgot_password_form($key): string
    {
    	$user = $this->user_model->find_by_key($key);

        $data = array(
            'user' => $user
        );

        return view('auth/forgot-password-form', $data);
    }

    public function forgot_password_form_post($key)
    {
    	if (! $this->validate([
            'email'  => [
            	'label'  => 'Email',
        		'rules'  => 'required|valid_email|min_length[3]',
            ],
            'password'  => [
            	'label'  => 'Password',
        		'rules'  => 'required|min_length[3]',
            ]
        ])) {
            // The validation fails, so returns the form.
            $this->session->setFlashdata('error', '<strong>Error!</strong>');
            return $this->forgot_password_form();
        }

        $post = $this->validator->getValidated();

    	$user = $this->user_model->find_by_email($post['email']);

    	$this->user_model->update($user['user_id'], [
    		'password' => sha1($post['password']),
    		'key_forgot' => null
    	]);

    	$this->session->setFlashdata('success', '<strong>Password anda berhasil di ubah. silahkan login</strong>');
        return redirect()->to('/sign-in');
    }

    public function logout()
    {
    	$this->session->set(array('user' => NULL));

        return redirect()->to('/');
    }
}
