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

use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Command\SymfonyCommand as BridgeSymfonyCommand;
use _PhpScoperdd275a4cd119\Fidry\Console\Command\SymfonyCommand as PreviousSymfonyCommand;
use _PhpScoperdd275a4cd119\Fidry\Console\Deprecation;
use function class_alias;
class_alias(BridgeSymfonyCommand::class, PreviousSymfonyCommand::class);
Deprecation::classRenamed(PreviousSymfonyCommand::class, BridgeSymfonyCommand::class, '0.5');
