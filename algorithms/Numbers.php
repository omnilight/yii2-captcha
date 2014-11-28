<?php

namespace omnilight\captcha\algorithms;


/**
 * Class Numbers provides algorithm that generates captcha that consist only from number characters
 */
class Numbers extends Original
{
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

        $numbers = '0123456789';
        $code = '';
        for ($i = 0; $i < $length; ++$i) {
            $code .= $numbers[mt_rand(0, 9)];
        }

        return $code;
    }
} 