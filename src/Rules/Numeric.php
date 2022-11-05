<?php

namespace Rules;

use JetBrains\PhpStorm\Pure;

class Numeric extends Rule
{
    #[Pure] public function isPassed($input): bool
    {
        return is_numeric($input);
    }
}