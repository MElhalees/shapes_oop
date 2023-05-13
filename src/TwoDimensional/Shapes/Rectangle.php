<?php

namespace LimeSurveyDrawer\TwoDimensional\Shapes;

use LimeSurveyDrawer\Core\AbstractScene;
use LimeSurveyDrawer\TwoDimensional\AbstractTwoDimensionalShape;

class Rectangle extends AbstractTwoDimensionalShape
{
    private Point $bottomLeftPoint;
    private Point $topRightPoint;

    public function area(): float
    {
        $width = abs($this->bottomLeftPoint->getX() - $this->topRightPoint->getX());
        $height = abs($this->bottomLeftPoint->getY() - $this->topRightPoint->getY());

        return $width * $height;
    }

    public static function draw(AbstractScene $scene, Point $bottomLeftPoint, Point $topRightPoint): Rectangle
    {
        // Logic to draw the shape

        $rectangle = new Rectangle();
        $rectangle->bottomLeftPoint = $bottomLeftPoint;
        $rectangle->topRightPoint = $topRightPoint;

        $scene->draw($rectangle);

        return $rectangle;
    }
}