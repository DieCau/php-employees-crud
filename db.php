<?php

$server="localhost";  // 127.0.0.1
$data="employee";
$user="root";
$password="";


try {
    $conection=new PDO("mysql:host=$server; dbname=$data",$user,$password);
} catch (Exception $exc) {
    echo $exc->getMessage();
}