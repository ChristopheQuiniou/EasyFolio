<?php

$UnavailableAction = "Cette action n'est pas disponible";
$UnavailablePage = "Cette page n'est pas disponible ";

function GetParameter( Int $number = 1, Bool $protectFromXSS = false ) : ?String {
    $getArray = $_GET;
    $param = ( isset($getArray["param".strval($number)]) && !empty($getArray["param".strval($number)]) ) ? $getArray["param".strval($number)] : null;

    if ( !is_null($param) && $protectFromXSS ){
        $param = htmlentities($param);
    }

    return $param;
}

function isConnected(){
    return isset($_SESSION["Connected"]);
}

function setConnected(bool $disconnect = false) {
    if ( $disconnect ) {
        session_unset();
        session_destroy();
    } else {
        $_SESSION["Connected"] = true;
    }

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
