<?php

namespace LimeSurveyDrawer\Core;

abstract class AbstractScene
{
    private array $shapes = [];

    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    public abstract static function build() : AbstractScene;

    public function addShape(AbstractShape $shape) : AbstractScene
    {
        $this->shapes[] = $shape;

        return $this;
    }

    public function getShapes() : array
    {
        return $this->shapes;
    }

    public function destroyShapes() : AbstractScene
    {
        $this->shapes = [];

        return $this;
    }
}
