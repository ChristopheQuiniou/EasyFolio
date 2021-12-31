<?php

class ControllerAccount
{

    public static function Account($parameters){

        if ( isConnected() ){
            require_once ("View/Account/Account.php");
        } else {
            redirect("Account","Login");
        }

    }

    public static function Disconnect($parameters){
        setConnected(true);
        redirect("Account","Login");
    }

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

        $name = GetParameter(1,true);
        $surname = GetParameter(2,true);
        $birthdate = GetParameter(3,true);
        $address = GetParameter(4,true);
        $phoneNumber = GetParameter(5,true);
        $email = GetParameter(6,true);
        $password = GetParameter(7);

        if ( !is_null($name) && !is_null($surname) && !is_null($birthdate) && !is_null($address) && !is_null($phoneNumber) && !is_null($email) && !is_null($password) ){

            //echo "name : $name  surname : $surname  birthdate : $birthdate   address : $address   phonenumber : $phoneNumber  email $email  password $password";

            if (Account::isValidName($name) &&
                Account::isValidSurname($surname) &&
                Account::isValidBirthdate($birthdate) &&
                Account::isValidAddress($address) &&
                Account::isValidPhoneNumber($phoneNumber) &&
                Account::isValidEmail($email) &&
                Account::isValidPassword($password)
            ){
                //Insert user in database
                $account = new Account(Account::$DefaultId,$name,$surname,$birthdate,$address,$phoneNumber,$email,$password,Account::$DefaultPicture);
                DAOAccount::create($account);

                //Create session
                setConnected();
                echo "GOOD";
            }  else {
                echo "ERROR";
            }

        } else {
            require_once ("View/Account/Register.php");
        }
    }
}