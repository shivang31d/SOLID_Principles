<!-- Bad Example: Modifying the class to handle new shapes. -->

<!-- It violates the Open/Closed Principle (OCP) because the AreaCalculator class needs modification whenever a new shape is added. -->
 
<?php

class Shape {
    const TYPE_CIRCLE = 'circle';
    const TYPE_SQUARE = 'square';
}

class AreaCalculator {
    public function calculateArea($shape, $dimension) {s
        switch ($shape) {
            case Shape::TYPE_CIRCLE:
                return pi() * ($dimension ** 2);
            case Shape::TYPE_SQUARE:
                return $dimension * $dimension;
            default:
                throw new Exception("Unknown shape type");
        }
    }
}

// Usage
$calculator = new AreaCalculator();
echo $calculator->calculateArea(Shape::TYPE_CIRCLE, 5); // Area of circle
echo $calculator->calculateArea(Shape::TYPE_SQUARE, 4); // Area of square

?>
