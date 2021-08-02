<?php

namespace CarbonClean\Sanitizer\Filters;

use Carbon\Carbon as DateTime;
use CarbonClean\Sanitizer\Contracts\Filter;

class FormatDate implements Filter
{
    /**
     * Format data.
     *
     * @param mixed $value
     * @param array $options
     * @return mixed
     */
    public function apply($value, array $options = [])
    {
        if (!$value) {
            return $value;
        }
        if (sizeof($options) != 2) {
            throw new \InvalidArgumentException('The Sanitizer Format Date filter requires both the current date format as well as the target format.');
        }
        $currentFormat = trim($options[0]);
        $targetFormat = trim($options[1]);
        return DateTime::createFromFormat($currentFormat, $value)->format($targetFormat);
    }
}
