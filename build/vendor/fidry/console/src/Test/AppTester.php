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
namespace _PhpScoperdd275a4cd119\Fidry\Console\Test;

use _PhpScoperdd275a4cd119\Fidry\Console\Application\Application as ConsoleApplication;
use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Application\SymfonyApplication;
use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Command\BasicSymfonyCommandFactory;
use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\CommandLoader\CommandLoaderFactory;
use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\CommandLoader\SymfonyFactoryCommandLoaderFactory;
use _PhpScoperdd275a4cd119\Fidry\Console\DisplayNormalizer;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\Tester\ApplicationTester;
/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AppTester extends ApplicationTester
{
    public static function fromConsoleApp(ConsoleApplication $application, CommandLoaderFactory $commandFactory = new SymfonyFactoryCommandLoaderFactory(new BasicSymfonyCommandFactory())): self
    {
        return new self(new SymfonyApplication($application, $commandFactory));
    }
    /**
     * @param callable(string):string $extraNormalizers
     */
    public function getNormalizedDisplay(callable ...$extraNormalizers): string
    {
        return DisplayNormalizer::removeTrailingSpaces($this->getDisplay(), ...$extraNormalizers);
    }
}
