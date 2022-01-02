<?php

$UnavailableAction = "Cette action n'est pas disponible";
$UnavailablePage = "Cette page n'est pas disponible ";

function GetParameter( Int $number = 1, Bool $sanitize = false ) : ?String {
    $getArray = $_GET;
    $param = ( isset($getArray["param".strval($number)]) && !empty($getArray["param".strval($number)]) ) ? $getArray["param".strval($number)] : null;

    if ( !is_null($param) && $sanitize ){
        $param = htmlspecialchars($param);
    }

    return $param;
}

function isConnected(){
    return isset($_SESSION["Connected"]) && isset($_SESSION["Id"]);
}

function connect(int $id){
    //disconnect();
    session_unset();
    $_SESSION["Id"] = $id;
    $_SESSION["Connected"] = true;
}

function disconnect(){
    session_unset();
    session_destroy();
}


function showErrorPage(string $message){
    $errMsg = $message;
    require_once ("View/Error/Custom.php");
}


function redirect(string $controller, string $action, array $params = null ){
    $paramsStr = "";
    $counter = 1;
    if ( !is_null($params) ) {
        foreach ($params as $param) {
            $params .= "&param" . strval($counter) . "=$param";
            $counter++;
        }
    }

    header("Location:?controller=$controller&action=$action$paramsStr");
}
