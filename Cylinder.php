<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getPerimeter($radius);
        $perimeter = $this->getBaseArea($radius);
        return $perimeter * $height + 2 * $baseArea;
    }

    public function getPerimeter($radius)
    {
        return pi() * $radius * $radius;
    }

    public function getBaseArea($radius)
    {
        return 2 * pi() * $radius;
    }
}

$cylinder = new Cylinder();
echo $cylinder->getVolume(5, 6);