<?php namespace App;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator {

    //Registered in ValidationServiceProvider

    /**
     * Performs validation that only accepts alphas, numbers and spaces
     *
     * @param $attribute
     * @param $value
     * @return int
     */
    public function validateAlphaNumSpaces($attribute, $value)
    {
        $regex = '/^[a-zA-Z0-9\-\s]+$/';

        return preg_match($regex, $value);
    }

}