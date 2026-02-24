<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\SniffDeprecationTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\DeprecatedInvalid;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\DeprecatedSniff;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
class InvalidDeprecationVersionSniff implements Sniff, DeprecatedSniff
{
    public function getDeprecationVersion()
    {
        return 3.8;
    }
    public function getRemovalVersion()
    {
        return 'dummy';
    }
    public function getDeprecationMessage()
    {
        return 'dummy';
    }
    public function register()
    {
        return [\T_WHITESPACE];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
