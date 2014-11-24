<?php

namespace omnilight\captcha\algorithms;


/**
 * Class BaseAlgorithm
 */
abstract class BaseAlgorithm
{
    /**
     * @return string
     */
    abstract public function generate();
} 