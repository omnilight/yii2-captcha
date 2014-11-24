<?php

namespace omnilight\captcha;

use omnilight\captcha\algorithms\BaseAlgorithm;


/**
 * Class CaptchaAction
 */
class CaptchaAction extends \yii\captcha\CaptchaAction
{
    /**
     * @var string|array|BaseAlgorithm Algorithm of the code generation
     */
    public $algorithm = 'omnilight\captcha\algorithms\Original';
    /**
     * @var string the TrueType font file. This can be either a file path or path alias.
     * Original captcha use yii/captcha/SpicyRice.ttf
     */
    public $fontFile = '@omnilight/captcha/Roboto-Regular.ttf';

    protected function generateVerifyCode()
    {
        /** @var BaseAlgorithm $algorithm */
        if (is_string($this->algorithm))
            $algorithm = \Yii::createObject(['class' => $this->algorithm]);
        elseif (is_object($this->algorithm))
            $algorithm = \Yii::createObject($this->algorithm);
        else
            $algorithm = $this->algorithm;

        return $algorithm->generate();
    }


} 