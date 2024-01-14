<?php

// Namespace
namespace MyProject;

// Trait
trait Logger {
    public function log($message) {
        echo "Logging: $message\n";
    }
}

// Abstract Class
abstract class Shape {
    // Abstract method
    abstract public function calculateArea();
}

// Static Properties and Methods
class MathUtility {
    public static $counter = 0;

    public static function incrementCounter() {
        self::$counter++;
    }
}

// Concrete Class implementing the Shape abstract class and using the Logger trait
class Circle extends Shape {
    use Logger;

    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
        MathUtility::incrementCounter(); // Accessing static method
    }

    // Implementation of the abstract method
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    // Additional method using the Logger trait
    public function logArea() {
        $this->log("Area: " . $this->calculateArea());
    }
}

// Constructor Overriding
class ParentClass {
    public function __construct($param) {
        echo "Parent Constructor with param: $param\n";
    }
}

class ChildClass extends ParentClass {
    public function __construct($param) {
        parent::__construct($param); // Calling the parent constructor
        echo "Child Constructor with param: $param\n";
    }
}

// Using the classes and traits
$obj = new Circle(5);
$obj->logArea();

echo "MathUtility Counter: " . MathUtility::$counter . "\n";

// Constructor Overriding Example
$childObj = new ChildClass('Value');

?>
