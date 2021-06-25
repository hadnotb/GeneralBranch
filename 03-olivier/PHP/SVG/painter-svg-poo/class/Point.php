<?php

class Point{
    private $x;
    private $y;

    public function __construct()
    {
        $this->x = 0;
        $this->y = 0;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function moveTo(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

}