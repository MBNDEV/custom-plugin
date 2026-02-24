<?php

namespace _PhpScoperdd275a4cd119\Safe;

use _PhpScoperdd275a4cd119\Safe\Exceptions\FunchandException;
/**
 * @param callable(): void $callback
 * @param mixed $args
 * @throws FunchandException
 *
 */
function register_tick_function(callable $callback, ...$args): void
{
    error_clear_last();
    if ($args !== []) {
        $safeResult = \register_tick_function($callback, ...$args);
    } else {
        $safeResult = \register_tick_function($callback);
    }
    if ($safeResult === \false) {
        throw FunchandException::createFromPhpError();
    }
}
