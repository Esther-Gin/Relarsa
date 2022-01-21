<?php

include "dbConn.php";

$nombre= $_POST["uname"];
//Se deberia hacer un bindParam y cifrar la contrasena, pero en la base de datos se ha realizado normal 
$pass = $_POST["psw"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuari = '".$nombre."'and contra = '" .$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1){

    header("Location: descargas.php");
}

else if ($nr == 0){
    echo "fallado";
}

?>