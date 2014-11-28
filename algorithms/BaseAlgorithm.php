<?php

namespace omnilight\captcha\algorithms;

use yii\base\Object;


/**
 * Class BaseAlgorithm
 */
abstract class BaseAlgorithm extends Object
{
    /**
     * @return string
     */
    abstract public function generate();
} 