<?php

namespace LimeSurveyDrawer\TwoDimensional\Shapes;

use LimeSurveyDrawer\Core\AbstractScene;
use LimeSurveyDrawer\Core\AbstractShape;
use LimeSurveyDrawer\TwoDimensional\AbstractTwoDimensionalShape;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalScene;

class Point extends AbstractTwoDimensionalShape
{
    private int $x;
    private int $y;

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }


    public function area(): float
    {
        return 0;
    }

    public static function draw(AbstractScene $scene, int $x, int $y): Point
    {
        // This Method hold the logic to draw the shape
        $point = new Point();
        $point->x = $x;
        $point->y = $y;

        $scene->draw($point);

        return $point;
    }
}