<?php

echo "Hey i am the router";

require_once ("./CV/ControllerCV.class.php");
require_once ("./Account/ControllerAccount.class.php");

$controller = $_GET["controller"];
$action = $_GET["action"];
$parameters = $_GET;

switch ($controller) {

    case "Account" :

        break;
    case "Project":

        break;

    case "Education" :

        break;

    case "Skill" :

        break;


    default:
        //The CV is the default controller

        if ( is_null($action) OR $action == "Search" ) {
            //The default action
            CV::Search();
        } else {
            CV::$action($parameters);
        }

        CV::$action();


}





