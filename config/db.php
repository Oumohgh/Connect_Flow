<?php

$host = "localhost";
$user = "root";         
$pass = "";             
$db   = "application_de_gestion_des_contacts";


$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die("Connexion echouee : " . mysqli_connect_error());
}


mysqli_set_charset($conn, "utf8");