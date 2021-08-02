<?php

namespace CarbonClean\Sanitizer\Filters;

use CarbonClean\Sanitizer\Contracts\Filter;

class Uppercase implements Filter
{
    /**
     * Uppercase the given string.
     *
     * @param mixed $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, array $options = [])
    {
        return is_string($value) ? mb_strtoupper($value) : $value;
    }
}
