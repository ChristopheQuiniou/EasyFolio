<?php

class ControllerCV extends Controller
{
    public static function Search(Array $parameters){
        require_once ("View/CV/Search.php");
    }

    public static function Results(Array $parameters){

        $toLookFor = GetParameter(1,true);


        //Get all CVs that match the query


        require_once ("View/CV/Results.php");




    }

}