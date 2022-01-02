<?php

function connectToDatabase($user,$password,$database){
    $db = null;
    try {
        $db = new PDO("mysql:host=localhost;dbname=$database",$user,$password);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

    }
    return $db;
}
