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
namespace _PhpScoperdd275a4cd119\Humbug\PhpScoper\PhpParser\Parser;

use _PhpScoperdd275a4cd119\PhpParser\Lexer;
use _PhpScoperdd275a4cd119\PhpParser\Lexer\Emulative;
use _PhpScoperdd275a4cd119\PhpParser\Parser;
use _PhpScoperdd275a4cd119\PhpParser\Parser\Php7;
use _PhpScoperdd275a4cd119\PhpParser\Parser\Php8;
use _PhpScoperdd275a4cd119\PhpParser\PhpVersion;
final class StandardParserFactory implements ParserFactory
{
    public function createParser(?PhpVersion $phpVersion = null): Parser
    {
        $version = $phpVersion ?? PhpVersion::getHostVersion();
        $lexer = $version->isHostVersion() ? new Lexer() : new Emulative($version);
        return $version->id >= 80000 ? new Php8($lexer, $version) : new Php7($lexer, $version);
    }
}
