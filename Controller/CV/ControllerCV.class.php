<?php

class ControllerCV extends Controller
{

    public static function CV(Array $parameters){

        $id = GetParameter();

        require_once ("View/CV/CV.php");

    }

    public static function Search(Array $parameters){
        require_once ("View/CV/Search.php");
    }

    public static function Results(Array $parameters){

        $toLookFor = GetParameter(1,true);
        $results = null;

        if ( is_null($toLookFor) ){
            require_once ("View/CV/Results.php");
        } else {

            $results = DAOCV::matchSkill($toLookFor);;

            require_once ("View/CV/Results.php");
        }

    }

}