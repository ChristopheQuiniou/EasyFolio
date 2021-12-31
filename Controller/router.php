<?php

//echo "Hey i am the router";

require_once  ("utilities.php");

//Model
require_once ("Model/Account/Account.class.php");
require_once ("Model/AssociationSkillProject/AssociationSkillProject.class.php");
require_once ("Model/CV/CV.class.php");
require_once ("Model/Education/Education.class.php");
require_once ("Model/Project/Project.class.php");
require_once ("Model/Skill/Skill.class.php");

//DAO
require_once ("DAO/DAO.class.php");
require_once ("DAO/IDAO.php");
require_once ("DAO/Account/DAOAccount.class.php");
require_once ("DAO/Skill/DAOSkill.class.php");
require_once ("DAO/CV/DAOCV.class.php");
require_once ("DAO/Education/DAOEducation.class.php");
require_once ("DAO/Project/DAOProject.class.php");
require_once ("DAO/AssociationSkillProject/DAOAssociationSkillProject.class.php");

//Controller
require_once ("Controller.class.php");
require_once ("CV/ControllerCV.class.php");
require_once ("Account/ControllerAccount.class.php");




$controller = ( isset($_GET["controller"]) && !empty($_GET["controller"]) ) ? $_GET["controller"] : null;
$action = ( isset($_GET["action"]) && !empty($_GET["controller"]) )? $_GET["action"] : null;
$parameters = $_GET;

switch ($controller) {

    case "Account" :
        if ( method_exists("ControllerAccount",$action)) {
            ControllerAccount::$action($parameters);
        } else {
            $errMsg = "Cette action n'est pas disponible ";
            require_once ("View/Error/Custom.php");
        }

        break;

    case "Project":
        if ( method_exists("ControllerProject",$action)) {
            ControllerProject::$action($parameters);
        } else {
            $errMsg = "Cette action n'est pas disponible ";
            require_once ("View/Error/Custom.php");
        }

        break;

    case "Education" :
        if ( method_exists("ControllerEducation",$action)) {
            ControllerEducation::$action($parameters);
        } else {
            $errMsg = "Cette action n'est pas disponible ";
            require_once ("View/Error/Custom.php");
        }

        break;

    case "Skill" :
        if ( method_exists("ControllerSkill",$action)) {
            ControllerSkill::$action($parameters);
        } else {
            $errMsg = "Cette action n'est pas disponible ";
            require_once ("View/Error/Custom.php");
        }

        break;


    default:
        //The CV is the default controller
        if ( is_null($controller) OR $controller == "CV" ) {

            //If the action is also null
            if ( is_null($action) ){
                ControllerCV::Search($parameters);
            } else if ( method_exists("ControllerCV",$action)) {
                ControllerCV::$action($parameters);
            } else {
                $errMsg = "Cette action n'est pas disponible ";
                require_once ("View/Error/Custom.php");
            }
        } else {
            $errMsg = "Cette page n'est pas disponible ";
            require_once ("View/Error/Custom.php");
        }


}





