<?php

namespace omnilight\captcha\algorithms;


/**
 * Class Original provides code generation algorithm similar to the yii2's captcha
 */
class Original extends BaseAlgorithm
{
    /**
     * @var integer the minimum length for randomly generated word. Defaults to 6.
     */
    public $minLength = 6;
    /**
     * @var integer the maximum length for randomly generated word. Defaults to 7.
     */
    public $maxLength = 7;

    /**
     * @return string
     */
    public function generate()
    {
        if ($this->minLength > $this->maxLength) {
            $this->maxLength = $this->minLength;
        }
        if ($this->minLength < 3) {
            $this->minLength = 3;
        }
        if ($this->maxLength > 20) {
            $this->maxLength = 20;
        }
        $length = mt_rand($this->minLength, $this->maxLength);

        $letters = 'bcdfghjklmnpqrstvwxyz';
        $vowels = 'aeiou';
        $code = '';
        for ($i = 0; $i < $length; ++$i) {
            if ($i % 2 && mt_rand(0, 10) > 2 || !($i % 2) && mt_rand(0, 10) > 9) {
                $code .= $vowels[mt_rand(0, 4)];
            } else {
                $code .= $letters[mt_rand(0, 20)];
            }
        }

        return $code;
    }
}