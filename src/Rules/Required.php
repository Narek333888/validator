<?php

namespace Rules;

class Required extends Rule
{
    public function isPassed($input): bool
    {
        return ! empty($input);
    }
}