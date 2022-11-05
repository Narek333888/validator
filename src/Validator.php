<?php

use Core\Validator as BaseValidator;

class Validator
{
    /**
     * Set rules, attributes and validate.
     * @param array $rules
     * @param array $attributes
     * @return BaseValidator
     * @throws Exceptions\UndefinedRuleException
     */
    public static function make(array $rules, array $attributes): BaseValidator
    {
        return (new BaseValidator())
            ->setRules($rules)
            ->setAttributes($attributes)
            ->handle();
    }
}