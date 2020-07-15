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
        include('app/public/views/login.php');
    }
}