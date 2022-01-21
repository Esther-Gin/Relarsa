<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "gin";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(! $conn){

    echo "No hay conexion";

}

?>