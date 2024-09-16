<!-- Bad Example: A subclass that breaks expected behavior -->

<?php

class Employee {
    public function getSalary() {
        // Returns base salary
        return 50000;
    }
}

class Intern extends Employee {
    public function getSalary() {
        // Interns don't get a salary
        throw new Exception("Interns don't get a salary!");
    }
}

function printSalary(Employee $employee) {
    echo "Salary: " . $employee->getSalary() . "\n";
}

// Usage
$intern = new Intern();
printSalary($intern);  // Throws exception


?>