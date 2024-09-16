<!-- Liskov Substitution Principle : Subtypes must be substitutable for their base types without altering the correctness of the program. -->

<!-- Good Example: Ensure subclasses can be used interchangeably with their base class. -->

<?php

abstract class Employee {
    abstract public function getSalary();
}

class FullTimeEmployee extends Employee {
    public function getSalary() {
        // Returns base salary
        return 50000;
    }
}

class PartTimeEmployee extends Employee {
    public function getSalary() {
        // Returns part-time salary
        return 20000;
    }
}

function printSalary(Employee $employee) {
    echo "Salary: " . $employee->getSalary() . "\n";
}

// Usage
$fullTimeEmployee = new FullTimeEmployee();
$partTimeEmployee = new PartTimeEmployee();

printSalary($fullTimeEmployee); // Prints salary of full-time employee
printSalary($partTimeEmployee); // Prints salary of part-time employee


?>
