<?php

namespace LimeSurveyDrawer\ThreeDimensional;

use LimeSurveyDrawer\Core\AbstractScene;

class ThreeDimensionalScene extends AbstractScene
{
    public function draw(AbstractThreeDimensionalShape $shape)
    {
        $shape->draw($this);
    }

    public static function build(): ThreeDimensionalScene
    {
        return new self();
    }
}