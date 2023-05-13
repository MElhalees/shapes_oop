<?php

namespace LimeSurveyDrawer\ThreeDimensional;

use LimeSurveyDrawer\Core\AbstractShape;

abstract class AbstractThreeDimensionalShape extends AbstractShape
{
    protected abstract function drawShape(ThreeDimensionalScene $scene);

    public function draw(ThreeDimensionalScene $scene)
    {
        $this->drawShape($scene);
    }
}
