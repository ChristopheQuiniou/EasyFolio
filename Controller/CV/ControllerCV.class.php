<?php

class ControllerCV
{
    public static function Search(Array $parameters){
        require_once ("View/CV/Search.php");
    }

    public static function Results(Array $parameters){

        $toLookFor = ( isset($parameters["param1"]) ) ? $parameters["param1"] : null; // The skill that we are looking for

        if ( is_null($toLookFor) ){
            echo "no parameter";
        } else {
            echo "Looking for CVs that match this skill " . $toLookFor;
        }


    }

}