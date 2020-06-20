<?php

class Employee{
    private $firstName;
    private $lastName;
    private $age;
    private $salery;
    private $position;

    function __construct($firstName,$lastName,$age,$salery,$position){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->salery = $salery;
        $this->position = $position;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSalery()
    {
        return $this->salary;
    }

    public function getPosition()
    {
        return $this->position;
    }




}


?>