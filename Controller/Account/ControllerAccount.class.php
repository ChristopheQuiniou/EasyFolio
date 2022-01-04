<?php

class ControllerAccount extends Controller
{

    public static function Account($parameters){

        $account = null;
        $title = "Mon compte";
        $profilPicture = Account::$DefaultPicture;
        $name = "Default";
        $surname = "Account";

        $paramId = GetParameter();

        //View someone else account
        if ( !is_null($paramId) || isConnected() ){


            if ( !is_null($paramId) ){
                $account = DAOAccount::read($paramId);
                $title = "Profil";
            } else {
                $account = DAOAccount::read($_SESSION["Id"]);
            }

                $name = $account->getName();
                $surname = $account->getSurname();
                $profilPicture = $account->getProfilPicture();
                require_once ("View/Account/Account.php");

        } else {
            redirect("Account", "Login");
        }

    }

    public static function Disconnect($parameters){
        disconnect();
        redirect("Account","Login");
    }

    public static function Login($parameters){

        $email = GetParameter(1,true);
        $password = GetParameter(2);


        //Check credentials
       if ( !is_null($email) && !is_null($password) ) {
           //echo "Checking your credentials " . $email . " " . $password;
           $id = DAOAccount::goodCredentials($email,$password);
           if ( $id ){

               //Set session
               connect($id);

               //Return success to caller
               echo Controller::$SUCCESS_CODE;

           } else {
               echo Controller::$ERROR_CODE;
           }

       } else {
           //If already connected
           if ( isConnected() ){
               redirect("Account","Account");
           } else {
               require_once ("View/Account/Login.php");
           }
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
                !DAOAccount::isEmailUsed($email) &&
                Account::isValidPassword($password)
            ){



                //Insert user in database
                $account = new Account(Account::$DefaultId,$name,$surname,$birthdate,$address,$phoneNumber,$email,password_hash($password,PASSWORD_DEFAULT),Account::$DefaultPicture);
                $id = DAOAccount::create($account);

                //Create session
                connect($id);

                //Return to the caller that everything is ok
                echo Controller::$SUCCESS_CODE;

            } else {
                echo Controller::$ERROR_CODE;
            }

        } else {
            require_once ("View/Account/Register.php");
        }
    }


    /**
     * Method that echo a message depending on how the email send is in the database
     * @param $parameters : parameters in the URL it need to contain the email in the first parameter
     * echo ERROR if the email is alread in use
     * SUCCESS if no usage
     * INVALID_PARAM if this is not a good email or wrong parameter number
     */
    public static function IsEmailUsed($parameters){
        $email = GetParameter(1);

        if ( Account::isValidEmail($email) ){

            if ( DAOAccount::isEmailUsed($email) ){
                echo Controller::$ERROR_CODE;
            } else {
                echo Controller::$SUCCESS_CODE;
            }

        } else {
            echo Controller::$INVALID_PARAM_CODE;
        }

    }




}