<?php 

class Database {
    
    protected $connexion;
    public function __construct()
    {
        try {
            $this->connexion =  new PDO("mysql:host=localhost;dbname=atelier", "root", "");
        }catch(Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

}