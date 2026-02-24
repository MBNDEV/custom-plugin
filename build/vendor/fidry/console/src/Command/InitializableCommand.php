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
namespace _PhpScoperdd275a4cd119\Fidry\Console\Command;

use _PhpScoperdd275a4cd119\Fidry\Console\IO;
interface InitializableCommand extends Command
{
    /**
     * Its main purpose is to initialize variables used in the rest of the
     * command methods.
     */
    public function initialize(IO $io): void;
}
