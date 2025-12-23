<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "application_de_gestion_des_contacts";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8";

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("non connection" . $e->getMessage());
}
