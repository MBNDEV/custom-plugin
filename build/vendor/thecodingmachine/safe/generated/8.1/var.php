<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\VarException;
/**
 * @param mixed $var
 * @param string $type
 * @throws VarException
 *
 */
function settype(&$var, string $type): void
{
    error_clear_last();
    $safeResult = \settype($var, $type);
    if ($safeResult === \false) {
        throw VarException::createFromPhpError();
    }
}
