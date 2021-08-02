<?php

namespace Carbon\Sanitizer\Filters;

use Carbon\Sanitizer\Contracts\Filter;

class EscapeHTML implements Filter
{
    /**
     * Remove HTML tags and encode special characters from the given string.
     *
     * @param mixed $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, array $options = [])
    {
        return is_string($value) ? filter_var($value, FILTER_SANITIZE_STRING) : $value;
    }
}
