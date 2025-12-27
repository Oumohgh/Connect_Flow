<?php 

class Address extends Model{
    public string $city;
    public string $country;
    public string $address;

    public function setTableName(string $name): void {
        $this->table = $name;
    }

    public function __construct($city, $country, $address)
    {
        $this->city = $city;
        $this->country = $country;
        $this->address = $address;
    }
}