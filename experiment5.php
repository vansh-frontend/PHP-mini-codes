<body>
<head>
    <style>
        body{
            background-color: #2c2c2c;
            color: white;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin: 30px 0px;
            justify-content: center;
            display: flex;
            /* flex-direction: column; */
        }
        strong{
            flex-direction: column;
            font-size: 2.3em;
            margin-top: 100px;
            color:cyan
        }

        
        
    </style>
</head>
<strong>
<?php

class Car {
    // Properties
    public $make;
    public $model;
    private $year;
    protected $color;

    // Constructor
    public function __construct($make, $model, $year, $color) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
    }

    // Methods
    public function displayInfo() {
        echo "Car Information: \n";
        echo "<br>";
        echo "Make: " . $this->make . "\n";
        echo "<br>";
        echo "Model: " . $this->model . "\n";
        echo "<br>";
        echo "Year: " . $this->year . "\n";
        echo "<br>";
        echo "Color: " . $this->color . "\n";
        echo "<br>";
    }

    // Access Modifiers
    public function getYear() {
        return $this->year;
    }

    protected function setColor($color) {
        $this->color = $color;
    }
}

// Create an instance of the Car class
$car1 = new Car("Toyota", "Camry", 2022, "Blue");

// Accessing public properties and calling methods
$car1->displayInfo();
echo "Year: " . $car1->getYear() . "\n";

// Attempting to access private and protected properties (uncommenting these lines will generate an error)
// echo "Year: " . $car1->year . "\n";
// echo "Color: " . $car1->color . "\n";

// Attempting to call a protected method (uncommenting this line will generate an error)
// $car1->setColor("Red");

?>
<strong>
</body>