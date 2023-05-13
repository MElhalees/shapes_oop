<?php

namespace LimeSurveyDrawer;

use LimeSurveyDrawer\Core\Factories\AbstractDimensionalFactory;
use LimeSurveyDrawer\TwoDimensional\TwoDimensionalFactory;

class Application
{
    private static Application $instance;
    private AbstractDimensionalFactory $factory;

    private function __construct(AbstractDimensionalFactory $factory)
    {
        $this->factory = $factory;
        $this->factory->buildScene();
    }

    protected function __clone() {}
    protected function __wakeup() {}

    public static function getInstance(AbstractDimensionalFactory $factory): static
    {
        if (static::$instance === null) {
            static::$instance = new static($factory);
        }

        return static::$instance;
    }

    public function __destruct()
    {
        $factory = AbstractDimensionalFactory::getInstance();
        $factory->destroyScene();
    }

    public function run()
    {
        // ...
    }
}

$twoDimensionalFactory = TwoDimensionalFactory::getInstance();

$app = Application::getInstance($twoDimensionalFactory);

$twoDimensionalFactory->drawPoint(1, 1);

$twoDimensionalFactory->drawCircle($twoDimensionalFactory->drawPoint(1, 1), 1);

$twoDimensionalFactory->drawRectangle($twoDimensionalFactory->drawPoint(1, 1), $twoDimensionalFactory->drawPoint(2, 2));