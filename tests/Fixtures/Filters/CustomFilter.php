<?php

namespace Carbon\Sanitizer\Tests\Fixtures\Filters;

use Carbon\Sanitizer\Contracts\Filter;

class CustomFilter implements Filter
{
    public function apply($value, array $options = [])
    {
        return trim($value) . trim($value);
    }
}
