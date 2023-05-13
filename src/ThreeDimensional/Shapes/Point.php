<?php

namespace LimeSurveyDrawer\ThreeDimensional\Shapes;

use LimeSurveyDrawer\ThreeDimensional\AbstractThreeDimensionalShape;
use LimeSurveyDrawer\ThreeDimensional\ThreeDimensionalScene;

class Point extends AbstractThreeDimensionalShape
{
    private int $x;
    private int $y;
    private int $z;

    public function __construct(int $x, int $y, int $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function area(): float
    {
        return 0;
    }

    protected function drawShape(ThreeDimensionalScene $scene) : Point
    {
        // This Method hold the logic to draw the shape
        return $this;
    }
}