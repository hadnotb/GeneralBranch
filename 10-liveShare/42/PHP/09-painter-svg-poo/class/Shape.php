<?php 

abstract class Shape {

    protected $color;
    protected $opacity;
    protected $location;

    abstract public function draw();

    public function __construct()
    {
        $this->location = new Point();
        $this->color = 'grey';
        $this->opacity = 1;
    }

    public function setLocation(int $x, int $y)
    {
       $this->location->moveTo($x,$y);    
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getOpacity()
    {
        return $this->opacity;
    }

    public function setColor(string $color, float $opacity)
    {
        $this->color = $color;
        $this->opacity = $opacity;
    }
}