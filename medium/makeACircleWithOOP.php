<?php
/*Make a Circle with OOP
Your task is to create a Circle constructor that creates a circle with a radius provided by an argument. The circles constructed must have two getters getArea() (PI*r^2) and getPerimeter() (2*PI*r) which give both respective areas and perimeter (circumference).

For help with this class, I have provided you with a Rectangle constructor which you can use as a base example.

Examples
$circy = new Circle(11);
$->getArea();

// Should return 380.132711084365

$circy = new Circle(4.44);
$->getPerimeter();

// Should return 27.897342763877365
Notes
Don't worry about floating point precision - I've factored in the chance that your answer may be more or less accurate than mine. This is more of a tutorial than a challenge so the topic covered may be considered advanced, yet the challenge is more simple - so if this challenge gets labelled as easy, don't worry too much.*/

class Rectangle {
  public function __construct($sideA, $sideB)
  {
    $this->sideA = $sideA;
    $this->sideB = $sideB;
  }
  public function getArea()
  {
    return $this->sideA * $this->sideB;
  }
  public function getPerimeter()
  {
    return ($this->sideA + $this->sideB) * 2;
  }
}

class Circle {
  // Write your code here
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  public function getArea()
  {
    return M_PI * $this->radius * $this->radius;
  }
  public function getPerimeter()
  {
    return 2 * M_PI * $this->radius;
  }
}

function roundNumber($number) {
  $factor = pow(10, 5);
  return round($number * $factor) / $factor;
}

echo "testCircle1<br>";
$circo = new Circle(20);
echo roundNumber($circo->getArea()) === 1256.63706;
echo roundNumber($circo->getPerimeter()) === 125.66371;
echo "<br>";
  
echo "testCircle2<br>";
$circo1 = new Circle(2);
echo roundNumber($circo1->getArea()) === 12.56637;
echo roundNumber($circo1->getPerimeter()) === 12.56637;
echo "<br>";

echo "testCircle3<br>";
$circo2 = new Circle(4.4);
echo roundNumber($circo2->getArea()) === 60.82123;
echo roundNumber($circo2->getPerimeter()) === 27.64602;
echo "<br>";

echo "randomTest<br>";
$randomInt = round(floor(rand() * floor(200)));
$circo3 = new Circle($randomInt);
echo roundNumber($circo3->getArea()) === round(pi()*pow($randomInt,2));
echo roundNumber($circo3->getPerimeter()) === round(2*pi()*$randomInt);
