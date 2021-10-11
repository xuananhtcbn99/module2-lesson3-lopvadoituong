<?php

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private int $speed= 1;
    private bool $on= false;
    private float $radius=5;
    private string $color="blue";

    public function __construct($speed,$radius, $color, $on)
    {
        $this->speed = $speed;
        $this->radius = $radius;
        $this->color = $color;
        $this->on = $on;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    public function isOn():bool
    {
        return $this->on;
    }

    public function setOn($on): void
    {
        $this->on = true;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): void
    {
        $this->color = $color;
    }
function toString():string {
    $str = "";
    if ($this->isON() === true) {
        $str = "Fan is on." . " Speed:" . $this->speed . " Radius:" . $this->radius . " Color:" . $this->color;
    } else {
        $str = "Fan is off." . " Radius:" . $this->radius . " Color:" . $this->color;
    }
    return $str;
}
}
