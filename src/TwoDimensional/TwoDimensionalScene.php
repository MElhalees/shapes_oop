<?php

namespace LimeSurveyDrawer\TwoDimensional;

use LimeSurveyDrawer\Core\AbstractScene;

class TwoDimensionalScene extends AbstractScene
{
    public function draw(AbstractTwoDimensionalShape $shape)
    {
        $this->addShape($shape);
    }

    public static function build(): TwoDimensionalScene
    {
        return new self();
    }
}