<?php

class Employee {
    private $_firstName;
    private $_lastName;
    private $_monthlySalary;

    public function __construct($firstName, $lastName, $monthlySalary) {
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_monthlySalary = $monthlySalary;
    }

    public function getAnnualSalary(){
        return $this->_monthlySalary * 12;
    }

    public function raise($raise){
        $this->_monthlySalary += ($this->_monthlySalary * 10 / 100);
    }
}

echo "Employee Pertama dengan detail object : <br>";

$firstEmployee = new Employee("David", "Buchanan", 6000000);

print_r($firstEmployee);

echo "<br><br>";

echo "First Employee's Annual Salary : " . $firstEmployee->getAnnualSalary() . "<br><br>";

$firstEmployee->raise(10);

echo "After 10% raise : " . $firstEmployee->getAnnualSalary() . "<br><br>";

//////////////////////////////////////////////////////////////////////////////////////////////

echo "Employee Kedua dengan detail object : <br>";

$secondEmployee = new Employee("Michael", "Tremolo", 7500000);

print_r($secondEmployee);

echo "<br><br>";

echo "Second Employee's Annual Salary : " . $secondEmployee->getAnnualSalary() . "<br><br>";

$secondEmployee->raise(10);

echo "After 10% raise : " . $secondEmployee->getAnnualSalary() . "<br><br>";

?>