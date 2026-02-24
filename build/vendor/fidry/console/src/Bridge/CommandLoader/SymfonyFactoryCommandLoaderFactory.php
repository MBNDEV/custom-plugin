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
namespace _PhpScoperdd275a4cd119\Fidry\Console\Bridge\CommandLoader;

use _PhpScoperdd275a4cd119\Fidry\Console\Bridge\Command\SymfonyCommandFactory;
use _PhpScoperdd275a4cd119\Fidry\Console\Command\Command as FidryCommand;
use _PhpScoperdd275a4cd119\Fidry\Console\Command\LazyCommandEnvelope;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\Command\Command as SymfonyNativeCommand;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\CommandLoader\CommandLoaderInterface;
use _PhpScoperdd275a4cd119\Symfony\Component\Console\CommandLoader\FactoryCommandLoader;
final class SymfonyFactoryCommandLoaderFactory implements CommandLoaderFactory
{
    public function __construct(private readonly SymfonyCommandFactory $commandFactory)
    {
    }
    public function createCommandLoader(array $commands): CommandLoaderInterface
    {
        $factories = [];
        foreach ($commands as $commandOrEnvelope) {
            $command = $this->createCommand($commandOrEnvelope);
            /** @var string $name */
            $name = $command->getName();
            $factories[$name] = static fn(): SymfonyNativeCommand => $command;
        }
        return new FactoryCommandLoader($factories);
    }
    private function createCommand(FidryCommand|LazyCommandEnvelope|SymfonyNativeCommand $commandOrCommandFactory): SymfonyNativeCommand
    {
        if ($commandOrCommandFactory instanceof SymfonyNativeCommand) {
            return $commandOrCommandFactory;
        }
        return $commandOrCommandFactory instanceof FidryCommand ? $this->commandFactory->crateSymfonyCommand($commandOrCommandFactory) : $this->commandFactory->crateSymfonyLazyCommand($commandOrCommandFactory->name, $commandOrCommandFactory->description, $commandOrCommandFactory->factory);
    }
}
