<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\GettextException;
/**
 * @param string $domain
 * @param string $directory
 * @return string
 * @throws GettextException
 *
 */
function bindtextdomain(string $domain, string $directory): string
{
    error_clear_last();
    $safeResult = \bindtextdomain($domain, $directory);
    if ($safeResult === \false) {
        throw GettextException::createFromPhpError();
    }
    return $safeResult;
}
