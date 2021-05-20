<?php
include_once "Shape.php";
class Triangle extends Shape{
    public float $side1;
    public float $side2;
    public float $side3;
    public function __construct( $color,$side1,$side2,$side3)
    {
        parent::__construct($color);
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }
    public function getSide1():float
    {
        return $this->side1;
    }

    public function getSide2(): float
    {
        return $this->side2;
    }

    public function getSide3(): float
    {
        return $this->side3;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function getPerimeter():float
    {
        return $this->side1 + $this->side2 + $this->side3;

    }
    public function getArea():float
    {
        $a=$this->getPerimeter()/2;
        $b=$a*($a-$this->side1)*($a-$this->side2)*($a-$this->side3);
        return sqrt($b);
    }
    public function toString()
    {
       echo "Triangle:"."<br>".
           "color=".$this->color."<br>".
           "side1=".$this->side1."<br>".
           "side2=".$this->side2."<br>".
           "side3=".$this->side3."<br>".
           "Perimeter=".$this->getPerimeter()."<br>".
           "Area=".$this->getArea();

    }

}
