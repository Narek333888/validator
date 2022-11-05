<?php

namespace Rules;

use JetBrains\PhpStorm\Pure;
use Rules\Interfaces\RuleInterface;

abstract class Rule implements RuleInterface
{
    #[Pure] public function message(string $attribute): string
    {
        $rule = strtolower(basename(static::class));
        return sprintf('The attribute %s must be %s.', $attribute, $rule);
    }
}