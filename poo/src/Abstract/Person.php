<?php 


abstract class Person extends Model {
    protected string $firstname;
    protected string $lastname;
    protected string $email;


    public function __construct($firstname, $lastname, $email) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    public function getFirstname() : string {
        return $this->firstname;
    }

    public function getLastname () :string {
        return $this->lastname;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setFirstname(string $variable) : void {
        $this->firstname = $variable;
    }

    public function setLastname (string $variable) :void {
        $this->lastname = $variable;
    }

    public function setEmail(string $variable) : void {
        $this->email = $variable;
    }
    

}