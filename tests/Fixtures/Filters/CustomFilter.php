<?php

namespace CarbonClean\Sanitizer\Tests\Fixtures\Filters;

use CarbonClean\Sanitizer\Contracts\Filter;

class CustomFilter implements Filter
{
    public function apply($value, array $options = [])
    {
        return trim($value) . trim($value);
    }
}
