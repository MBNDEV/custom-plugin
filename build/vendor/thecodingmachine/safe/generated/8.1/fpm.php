<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\FpmException;
/**
 * @throws FpmException
 *
 */
function fastcgi_finish_request(): void
{
    error_clear_last();
    $safeResult = \fastcgi_finish_request();
    if ($safeResult === \false) {
        throw FpmException::createFromPhpError();
    }
}
