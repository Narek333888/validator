<?php

namespace Rules\Interfaces;

interface RuleInterface
{
    /**
     * Validate given value and return bool.
     * @param $input
     * @return bool
     */
    public function isPassed($input): bool;

    /**
     * Return validation message
     * @param string $attribute
     * @return string
     */
    public function message(string $attribute): string;
}