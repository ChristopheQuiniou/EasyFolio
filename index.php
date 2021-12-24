<?php

//Import database necessity
require_once ("DataBase/logs.php");
require_once ("DataBase/scripts.php");



//Try to connect to the database
$db = connect($user,$password,$database);

//If connexion failed display error page
if ( is_null($db) ){
    require_once ("View/Error/service-unavailable.php");
    die();
}

//Else initialize DAO and load router
require_once ("DAO/DAO.class.php");
$dao = DAO::Init($db);

require_once ("Controller/router.php");

