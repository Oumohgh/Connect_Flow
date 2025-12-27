<?php 

class Contact extends Person{
    private string $phone;
    private Address $address;
    // private User $user;

    public function __construct($firstname, $lastname, $email, $city, $country, $address, $phone) {
        parent::__construct($firstname, $lastname, $email);

        $this->phone = $phone;
        $this->address = new Address($city, $country, $address);

    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function setPhone(string $phone): string {
        $this->phone = $phone;
        return 'dkhol so9 rassek db';
    }

    public function getAddress () : Address 
    {
        return $this->address;
    }

    public function setAddress(Address $address): void  {
        $this->address = $address;
    }

    public function setTableName(string $name): void {
        $this->table = $name;
    }

    // public function getUser () : User {
    //     return $this->user;
    // }

    // public function setUser(User $user): void  {
    //     $this->user = $user;
    // }
 }