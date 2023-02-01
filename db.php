<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "book_db";


//Creat connection
try{
    $con = new PDO("mysql:host=$serverName;dbname=$dbName",$userName, $password);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection Success!";
}catch(PDOException $e){
    echo "Error in connection!" .$e->getMessage();
}


?>