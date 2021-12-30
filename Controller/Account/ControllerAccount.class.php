<?php

class ControllerAccount
{
    public static function Login($parameters){

        $email = GetParameter(1,true);
        $password = GetParameter(2);


        //Check credentials
       if ( !is_null($email) && !is_null($password) ) {
           echo "Checking your credentials " . $email . " " . $password;


       } else {
           require_once ("View/Account/Login.php");
       }
    }

    public static function Register($parameters){

        require_once ("View/Account/Register.php");
    }
}