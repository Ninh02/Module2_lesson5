<?php
class Triangle extends Shape{
    public double $side1;
    public double $side2;
    public double $side3;
    public string $color;
    public function __construct( $name,$color,$side1,$side2,$side3)
    {
        parent::__construct($name);
        $this->color=$color;
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }
    public function 
}
