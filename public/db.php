<?php

try{

   $pdo = new PDO("mysql:host=localhost;dbname=application_de_gestion_des_contacts;charset=utf8", "root", "");
    
}catch(PDOException $err ){
   
    echo "Db problem" .$err->getMessage();
    //exit();
}

