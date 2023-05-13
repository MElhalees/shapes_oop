<?php

namespace LimeSurveyDrawer\ThreeDimensional\Builders;

use LimeSurveyDrawer\Core\Builders\AbstractSceneBuilder;
use LimeSurveyDrawer\ThreeDimensional\ThreeDimensionalScene;

class ThreeDimensionalSceneBuilder extends AbstractSceneBuilder
{
    public static function build() : ThreeDimensionalScene
    {
        // Handle building process of the scene here [Camera, Lights, etc...]
        return ThreeDimensionalScene::build();

        // Example:
//        $camera_builder = new Camera::build();
//        $camera_builder->setFov(45);
//        $camera_builder->setNear(0.1);
//
//        $light_builder = new Light::build();
//        $light_builder->setIntensity(0.5);
//        $light_builder->setColor(0xffffff);
//
//        return new ThreeDimensionalScene()::build()
//                    ->setCamera($camera_builder->getCamera())
//                    ->setLight($light_builder->getLight());
    }

    public static function reset() : ThreeDimensionalScene
    {
        return ThreeDimensionalScene::build();
    }
}