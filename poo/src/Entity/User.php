<?php 
class User extends Person{
    private string $username;
    private string $password;

    private $contactList = [];

    public function __construct($firstname, $lastname, $email, $username, $password) {
        parent::__construct($firstname, $lastname, $email);

        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername() : string {
        return $this->username;
    }
    public function getPassword() : string {
        return $this->password;
    }
    public function setUsername(string $username): void {
        $this->username = $username;
    }
    public function setPassword (string $password) : void {
        $this->password = $password;
    }

    public function getContacts() : array {
        return $this->contactList;
    }

    public function setContacts(array $contacts) : void {
        $this->contactList = $contacts;
    }

    public function setTableName(string $name): void {
        $this->table = $name;
    }

    public function toArray() {
        return [
            $this->firstname,
            $this->lastname,
            $this->email,
            $this->username,
            $this->password
        ];
    }
}