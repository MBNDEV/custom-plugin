<?php

namespace _PhpScoperdd275a4cd119\Safe\Exceptions;

class JsonException extends \JsonException implements SafeExceptionInterface
{
    public static function createFromPhpError(): self
    {
        return new self(\json_last_error_msg(), \json_last_error());
    }
}
