<?php

namespace App\Models;
use \App\Database\Sql as Sql;

class LoginModel
{
    public function login($data)
    {
        
        $email = $data['email'];
        $password = filter_var($data['password'],FILTER_SANITIZE_STRING);
        
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) { 
            include('app/public/views/login.php');
            $_SESSION['error'] = true;
            $_SESSION['error_msg'] = "Invalid e-mail"; 
        }else {
            $login = Sql::connect()->prepare("SELECT * FROM `tb.users` WHERE email = ? AND password = ?");

            $login->execute(array($email,$password));
            
            if($login->rowCount() == 1) {
                $userInfo = $login->fetch();
                
                $_SESSION['login'] = true;
                $_SESSION['name'] = $userInfo['name'];
                $_SESSION['email'] = $userInfo['email'];
                $_SESSION['password'] = $userInfo['password'];
    
                header('Location: '.URL."/user");
                die();
            }else {
                $_SESSION['error'] = true;
                $_SESSION['error_msg'] = "Invalid user";
                include('app/public/views/login.php');
            }
        }


    }

}