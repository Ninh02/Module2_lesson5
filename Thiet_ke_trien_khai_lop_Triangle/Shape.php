<?php


class Shape
{
    public string $name;
    public string $color;

    public function __construct( $name, $color)
    {
        $this->name = $name;
        $this->color=$color;
    }

    public function show(): string
    {
        return "My shape is". $this->name."color:".$this->color;
    }
}
