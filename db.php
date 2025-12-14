<?php

$db_server="localhost";
$db_user="root";
$db_pass="";
$db_name= "application_de_gestion_des_contacts";
$conn ='';

$conn=mysqli_connect($db_server,
                        $db_user,
                        $db_pass,
                        $db_name);
if($conn){
    echo"vous etes connecte!";

}else{
    echo"echec de connecter";
}
?>