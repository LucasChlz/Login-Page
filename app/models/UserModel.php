<?php

namespace App\Models;

class UserModel
{
    public function loggout()
    {
        session_destroy();
        header('Location: '.URL);
        die();
    }
}