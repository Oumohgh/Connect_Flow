<?php

class Client {
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom,$prenom,$adresse)
    {
       $this->nom = $nom;
       $this->prenom = $prenom;
       $this->adresse = $adresse;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

}