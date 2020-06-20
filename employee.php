<?php

class Employee(){
    private $firstName;
    private $lastName;
    private $birthYear;
    private $salery;
    private $position;

    function __construct($firstName,$lastName,$birthYear,$salery,$position){
        $this->firsName = $firstName;
        $this->lastName = $lastName;
        $this->birthYear = $birthYear;
        $this->salery = $salery;
        $this->position = $position;
    }




}


?>