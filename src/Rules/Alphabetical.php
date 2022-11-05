<?php

namespace Rules;

use JetBrains\PhpStorm\Pure;

class Alphabetical extends Rule
{
    #[Pure] public function isPassed($input): bool
    {
        return ctype_alpha($input);
    }
}