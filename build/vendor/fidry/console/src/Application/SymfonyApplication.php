<?php

/*
 * This file is part of the Fidry\Console package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\Fidry\Console\Application;

use _PhpScoperdd275a4cd119\Fidry\Console\Application\SymfonyApplication as PreviousSymfonyApplication;
use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Application\SymfonyApplication as BridgeSymfonyApplication;
use _PhpScoperdd275a4cd119\Fidry\Console\Deprecation;
use function class_alias;
class_alias(BridgeSymfonyApplication::class, PreviousSymfonyApplication::class);
Deprecation::classRenamed(PreviousSymfonyApplication::class, BridgeSymfonyApplication::class, '0.5');
