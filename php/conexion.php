<?php

$dbname = "id19397862_unidad2"; //Base de datos
$dbuser = "id19397862_actividad2";
$dbhost = "localhost";
$dbpass = "@9Jh98zs7Pa~{st~";

try{
    $conn = new PDO("mysql:host = $dbhost; dbname=$dbname",$dbuser,$dbpass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
    
} catch(Exception $e){
    echo "No se conecto";
    
}

?>