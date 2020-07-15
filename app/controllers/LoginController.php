<?php

namespace App\Controllers;

class LoginController
{

    public $loginModel;

    public function __construct()
    {
        $this->loginModel = new \App\Models\LoginModel;
    }

    public function index()
    {
        $_SESSION['error'] = false;
        unset($_SESSION['error']);
        include('app/public/views/login.php');
    }

    public function login($data)
    {
        if(!$this->loginModel->login($data)) {
            $msg = $this->loginModel->login($data);
        };
    }
}