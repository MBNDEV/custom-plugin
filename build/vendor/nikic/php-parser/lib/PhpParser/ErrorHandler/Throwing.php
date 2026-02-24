<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\ErrorHandler;

use _PhpScoperdd275a4cd119\PhpParser\Error;
use _PhpScoperdd275a4cd119\PhpParser\ErrorHandler;
/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
class Throwing implements ErrorHandler
{
    public function handleError(Error $error): void
    {
        throw $error;
    }
}
