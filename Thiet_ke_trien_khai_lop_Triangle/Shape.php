<?php


class Shape
{
    public string $name;
    public string $color;

    public function __construct( $color)
    {
        $this->color=$color;
    }

    public function show(): string
    {
        return "shape color:".$this->color;
    }
}
