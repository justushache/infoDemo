<?php
include "employee.php";

class firm{
    private $name;
    private $worth;
    private $year_of_creation;
    private $employees;


    public function __construct($name,$worth,$year_of_creation){
        $this->name = $name;
        $this->worth = $worth;
        $this->year_of_creation = $year_of_creation;
        $this->employees = array();
    }

    public function addEmployee($employee){
        array_push($this->employees,$employee);
    }

    public function rmEmployee($firstName){
        $tempEmployees = $this->employees;
        $this->employees = array();
        for($i = 0; $i < length($tempEmployees);$i++){
            if($tempEmployees[$i].firstName != $firstName){
            array_push($this->employees,$tempEmployees[$i]);
        }
        }
    }

    public function calculateTotalSalery(){
        $salery  = 0;
        for($i = 0; $i < count($this->employees);$i++){
            $salery += $this->employees[$i]->getSalery();
        }
        return $salery;
    }
}


$f = new firm("appature science",0,1942);
$f->addEmployee(new Employee("Cave","johnson","dead",200000000,"founder"));
$f->addEmployee(new Employee("Shell","",30,0,"test subject"));
echo($f->calculateTotalSalery());

?>
