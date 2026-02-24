<?php

declare (strict_types=1);
/*
 * This file is part of the humbug/php-scoper package.
 *
 * Copyright (c) 2017 Théo FIDRY <theo.fidry@gmail.com>,
 *                    Pádraic Brady <padraic.brady@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd275a4cd119\Humbug\PhpScoper\Scoper\Factory;

use _PhpScoperdd275a4cd119\Humbug\PhpScoper\Configuration\Configuration;
use _PhpScoperdd275a4cd119\Humbug\PhpScoper\Scoper\Scoper;
use _PhpScoperdd275a4cd119\Humbug\PhpScoper\Symbol\SymbolsRegistry;
use _PhpScoperdd275a4cd119\PhpParser\PhpVersion;
interface ScoperFactory
{
    public function createScoper(Configuration $configuration, SymbolsRegistry $symbolsRegistry, ?PhpVersion $phpVersion = null): Scoper;
}
