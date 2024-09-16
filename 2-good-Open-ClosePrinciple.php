<!-- Open/Closed Principle : Software entities should be open for extension but closed for modification. -->

<!-- Good Example: Use an interface to allow extension without modifying existing code. -->

<?php

interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    public function __construct(private $radius) {}

    public function calculateArea() {
        return pi() * ($this->radius ** 2);
    }
}

class Square implements Shape {
    public function __construct(private $side) {}

    public function calculateArea() {
        return $this->side * $this->side;
    }
}

class AreaCalculator {
    public function calculateArea(Shape $shape) {
        return $shape->calculateArea();
    }
}

// Usage
$circle = new Circle(5);
$square = new Square(4);

$calculator = new AreaCalculator();
echo $calculator->calculateArea($circle); // Area of circle
echo $calculator->calculateArea($square); // Area of square

?>
