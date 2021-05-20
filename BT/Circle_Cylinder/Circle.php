<?php
class Circle{
    public float $radius;
    public string $color;
    public function __construct($radius,$color){
        $this->radius=$radius;
        $this->color=$color;
    }
    public function calculatorArea(): float|int
    {
        return pi()* pow($this->radius,2);
    }
    public function calculatorPerimeter(): float|int
    {
        return pi()*$this->radius*2;
    }
    public function toString(){
        echo "radius=".$this->radius.",color=".$this->color.",Area=".$this->calculatorArea();
    }
}
