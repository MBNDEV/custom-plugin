<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\RegisterSniffsMissingInterfaceTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\MissingInterface;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
final class ValidImplementsSniff implements Sniff
{
    public function register()
    {
        return [\T_OPEN_TAG];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
