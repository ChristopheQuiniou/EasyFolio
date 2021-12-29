<?php


function GetParameter( Int $number = 1, Bool $protectFromXSS = false ) : ?String {
    $getArray = $_GET;
    $param = ( isset($getArray["param".strval($number)]) && !empty($getArray["param".strval($number)]) ) ? $getArray["param".strval($number)] : null;

    if ( !is_null($param) && $protectFromXSS ){
        $param = htmlentities($param);
    }

    return $param;
}

