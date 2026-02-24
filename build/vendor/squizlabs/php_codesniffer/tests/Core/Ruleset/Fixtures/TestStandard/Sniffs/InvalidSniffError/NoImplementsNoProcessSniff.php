<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\RegisterSniffsRejectsInvalidSniffTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\InvalidSniffError;

final class NoImplementsNoProcessSniff
{
    public function register()
    {
        return [\T_OPEN_TAG];
    }
}
