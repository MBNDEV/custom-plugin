<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\StubTests\Parsers;

use _PhpScoperdd275a4cd119\PhpParser\Error;
use _PhpScoperdd275a4cd119\PhpParser\ErrorHandler;
class StubsParserErrorHandler implements ErrorHandler
{
    public function handleError(Error $error): void
    {
        $error->setRawMessage($error->getRawMessage() . "\n" . $error->getFile());
    }
}
