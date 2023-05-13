<?php

namespace LimeSurveyDrawer\TwoDimensional;

use LimeSurveyDrawer\Core\Factories\AbstractDimensionalFactory;
use LimeSurveyDrawer\TwoDimensional\Builders\TwoDimensionalSceneBuilder;
use LimeSurveyDrawer\TwoDimensional\Shapes\Circle;
use LimeSurveyDrawer\TwoDimensional\Shapes\Point;
use LimeSurveyDrawer\TwoDimensional\Shapes\Rectangle;

class TwoDimensionalFactory extends AbstractDimensionalFactory
{
    public function buildScene() : TwoDimensionalScene
    {
        return TwoDimensionalSceneBuilder::build();

    }

    public function destroyScene(): TwoDimensionalScene
    {
        return TwoDimensionalSceneBuilder::destroy();
    }

    public function drawCircle(Point $start, int $radius): Circle
    {
        return Circle::draw(static::$current_scene, $start, $radius);
    }

    public function drawPoint(float $x, float $y): Point
    {
        return Point::draw(static::$current_scene, $x, $y);
    }

    public function drawRectangle(Point $start, Point $end): Rectangle
    {
        return Rectangle::draw(static::$current_scene, $start, $end);
    }

}