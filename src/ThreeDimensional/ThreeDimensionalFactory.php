<?php

namespace LimeSurveyDrawer\ThreeDimensional;

use LimeSurveyDrawer\Core\Factories\AbstractDimensionalFactory;
use LimeSurveyDrawer\ThreeDimensional\Builders\ThreeDimensionalSceneBuilder;

class ThreeDimensionalFactory extends AbstractDimensionalFactory
{

    public function buildScene() : ThreeDimensionalScene
    {
        return ThreeDimensionalSceneBuilder::build();
    }

    public function resetScene() : ThreeDimensionalScene
    {
        return ThreeDimensionalSceneBuilder::reset();
    }


}