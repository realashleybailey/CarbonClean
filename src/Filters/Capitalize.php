<?php

namespace CarbonClean\Sanitizer\Filters;

use CarbonClean\Sanitizer\Contracts\Filter;

class Capitalize implements Filter
{
    /**
     * Capitalize the given string.
     *
     * @param mixed $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, array $options = [])
    {
        return is_string($value) ? mb_convert_case(mb_strtolower($value, 'UTF-8'),  MB_CASE_TITLE) : $value;
    }
}
