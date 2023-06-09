<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'Login';
    protected $useAutoIncrement = false;
    protected $primaryKey = 'Username';
    protected $allowedFields = ['Username', 'Password'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'Username' => 'required',
        'Password' => 'required',
    ];

    public function index()
    {
        return $this->findAll();
    }

    public function getUser($username)
    {
        return $this->where('Username', $username)->first();
    }

}
