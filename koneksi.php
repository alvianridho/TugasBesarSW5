<?php
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "akademik";

    try{
        $dbConn = new PDO("mysql:host={$dbHost};dbname={$dbName}",$dbUsername,$dbPassword);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $err){
        echo $err->getMessage();
    }
?>