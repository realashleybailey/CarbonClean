<?php

namespace Carbon\Sanitizer\Filters;

use Carbon\Sanitizer\Contracts\Filter;

class Lowercase implements Filter
{
    /**
     * Lowercase the given string.
     *
     * @param mixed $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, array $options = [])
    {
        return is_string($value) ? mb_strtolower($value, 'UTF-8') : $value;
    }
}
