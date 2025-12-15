<?php
$dbname="application_de_gestion_des_contacts";
$dbuser="root";
$dbpass=" ";
$dbhost="localhost";

try{

    $pdo= new PDO("mysql:host=" .$dbhost . "dbname=".$dbname,$dbuser,$dbpass);


}catch(PDOException $err ){
   
    echo "Db problem" .$err->getMessage();
    //exit();
}
?>
