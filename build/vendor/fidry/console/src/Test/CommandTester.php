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

use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Command\SymfonyCommand;
use _PhpScoperdd275a4cd119\Fidry\Console\Command\Command;
use _PhpScoperdd275a4cd119\Fidry\Console\DisplayNormalizer;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\Application;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\Tester\CommandTester as SymfonyCommandTester;
use _PhpScoperdd275a4cd119\Webmozart\Assert\Assert;
/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class CommandTester extends SymfonyCommandTester
{
    /**
     * If your command does not depend on any special behavior from the console, this static factory will probably be
     * good enough for you.
     * Otherwise, consider using the AppTester!
     */
    public static function fromConsoleCommand(Command $command): self
    {
        // A bare-bone application is needed to execute the Symfony CommandTester as what it does is configuring the
        // application and using it to execute the command.
        $application = new Application();
        $executableCommand = $application->add(new SymfonyCommand($command));
        Assert::notNull($executableCommand);
        return new self($executableCommand);
    }
    public function getNormalizedDisplay(callable ...$extraNormalizers): string
    {
        return DisplayNormalizer::removeTrailingSpaces($this->getDisplay(), ...$extraNormalizers);
    }
}
