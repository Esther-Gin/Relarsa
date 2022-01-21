<?php

include "dbConn.php";

if(!$conn){

    echo "No hay conexion";

}

$query = mysqli_query($conn, 'SELECT * FROM archivo');
$array = $query->fetch_all(MYSQLI_ASSOC);

if ($file_id){

    header('content-type: application/pdf');
    readfile('archivos/'.$array[$file_id]);
}