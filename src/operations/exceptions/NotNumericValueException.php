<?php

namespace App\operations\exceptions;

use JetBrains\PhpStorm\Pure;
use Throwable;

class NotNumericValueException extends \Exception
{
    #[Pure] public function __construct()
    {
        parent::__construct(message: "Value must be numeric!", code: 500);
    }
}