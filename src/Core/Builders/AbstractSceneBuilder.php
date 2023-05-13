<?php

namespace LimeSurveyDrawer\Core\Builders;

use LimeSurveyDrawer\ThreeDimensional\ThreeDimensionalScene;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalScene;

abstract class AbstractSceneBuilder
{
    public abstract static function build(): TwoDimensionalScene|ThreeDimensionalScene;

    public abstract static function destroy(): TwoDimensionalScene|ThreeDimensionalScene;
}