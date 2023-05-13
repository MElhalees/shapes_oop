<?php

namespace LimeSurveyDrawer\Core;

abstract class AbstractShape
{
    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    public abstract function area() : float;
}