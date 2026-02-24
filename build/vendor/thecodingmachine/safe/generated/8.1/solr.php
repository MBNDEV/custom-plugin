<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\SolrException;
/**
 * @return string
 * @throws SolrException
 *
 */
function solr_get_version(): string
{
    error_clear_last();
    $safeResult = \solr_get_version();
    if ($safeResult === \false) {
        throw SolrException::createFromPhpError();
    }
    return $safeResult;
}
