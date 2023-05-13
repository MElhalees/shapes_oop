<?php

namespace LimeSurveyDrawer\Core\Factories;

use LimeSurveyDrawer\Core\AbstractScene;
use LimeSurveyDrawer\ThreeDimensional\ThreeDimensionalScene;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalScene;

abstract class AbstractDimensionalFactory
{
    private static AbstractDimensionalFactory $instance;
    public static AbstractScene $current_scene;

    public static function getInstance(): static
    {
        if (static::$instance === null) {
            static::$instance = new static();

            static::$current_scene = static::$instance->buildScene();
        }

        return static::$instance;
    }

    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    public abstract function buildScene() : TwoDimensionalScene|ThreeDimensionalScene;

    public abstract function destroyScene() : TwoDimensionalScene|ThreeDimensionalScene;

    public function updateScene(AbstractScene $scene) : AbstractScene
    {
        static::$current_scene = $scene;
        return $scene;
    }
}