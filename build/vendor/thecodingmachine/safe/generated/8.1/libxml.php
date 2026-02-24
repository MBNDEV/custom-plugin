<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\LibxmlException;
/**
 * @param callable $resolver_function
 * @throws LibxmlException
 *
 */
function libxml_set_external_entity_loader(callable $resolver_function): void
{
    error_clear_last();
    $safeResult = \libxml_set_external_entity_loader($resolver_function);
    if ($safeResult === \false) {
        throw LibxmlException::createFromPhpError();
    }
}
