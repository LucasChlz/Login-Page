<?php

namespace App\Controllers;

class UserController
{

    public $userModel;

    public function __construct()
    {
        $this->userModel = new \App\Models\UserModel;
    }

    public function index()
    {
        if(!isset($_SESSION['login'])) {
            header('Location: '.URL);
        }
        include('app/public/views/user.php');
    }

    public function loggout()
    {
        if(!isset($_SESSION['login'])) {
            header('Location: '.URL);
        }
        $this->userModel->loggout();
    }
}