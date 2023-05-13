<?php

namespace LimeSurveyDrawer\ThreeDimensional\Shapes;


use LimeSurveyDrawer\ThreeDimensional\AbstractThreeDimensionalShape;
use LimeSurveyDrawer\ThreeDimensional\ThreeDimensionalScene;

class Sphere extends AbstractThreeDimensionalShape
{
    private Point $center;
    private int $radius;

    public function __construct(Point $center, int $radius)
    {
        $this->center = $center;
        $this->radius = $radius;
    }

    public function area(): float
    {
        return 4 * pi() * pow($this->radius, 2);
    }

    protected function drawShape(ThreeDimensionalScene $scene): Sphere
    {
        // This Method hold the logic to draw the shape
        return $this;
    }
}