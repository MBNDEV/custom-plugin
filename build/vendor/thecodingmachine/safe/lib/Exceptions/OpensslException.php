<?php

namespace _PhpScoperdd275a4cd119\Safe\Exceptions;

class OpensslException extends \Exception implements SafeExceptionInterface
{
    public static function createFromPhpError(): self
    {
        return new self(\openssl_error_string() ?: '', 0);
    }
}
