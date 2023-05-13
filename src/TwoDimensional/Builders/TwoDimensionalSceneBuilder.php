<?php

namespace LimeSurveyDrawer\TwoDimensional\Builders;

use LimeSurveyDrawer\Core\Builders\AbstractSceneBuilder;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalScene;

class TwoDimensionalSceneBuilder extends AbstractSceneBuilder
{
    public static function build() : TwoDimensionalScene
    {
        // Handling the creation of the scene here
        return TwoDimensionalScene::build();

        // Example:
//        $light_builder = new Light::build();
//        $light_builder->setIntensity(0.5);
//        $light_builder->setColor(0xffffff);
//
//        return new TwoDimensionalScene()::build()
//                    ->setLight($light_builder->getLight());
    }

    public static function destroy() : TwoDimensionalScene
    {
        return TwoDimensionalScene::build();
    }
}