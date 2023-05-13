<?php

namespace LimeSurveyDrawer\TwoDimensional\Shapes;

use LimeSurveyDrawer\Core\AbstractScene;
use LimeSurveyDrawer\TwoDimensional\AbstractTwoDimensionalShape;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalScene;

class Circle extends AbstractTwoDimensionalShape
{
    private Point $center;
    private int $radius;

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }

    public static function draw(AbstractScene $scene, Point $center, int $radius): Circle
    {
        // This Method hold the logic to draw the shape
        $circle = new Circle();
        $circle->center = $center;
        $circle->radius = $radius;

        $scene->draw($circle);

        return $circle;
    }
}