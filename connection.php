<?php

$host = "localhost";
$dbname = "users";
$username = "root";
$password = "";

try {

    $connect = new PDO("mysql:host=$host; dbname=$dbname" , $username , $password);
    
    echo "Connected to $host";

} catch (PDOException $FailMessage){

    die("Failed to connect $host: " . $FailMessage->getMessage());


}







?>