<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = "user_id";
    protected $allowedFields = ['user_id', 'nama', 'password', 'email', 'telp', 'role', 'key_forgot', 'status'];

    public function login($email, $password)
    {

        return $this->where('email', strtolower($email))
        ->where('password', sha1($password))
        ->where('status', 'active')
        ->first();
    }

    public function find_by_email($email)
    {
        return $this->where('email', strtolower($email))
        ->first();
    }

    public function find_by_key($key)
    {
        return $this->where('key_forgot', $key)
        ->first();
    }
}

