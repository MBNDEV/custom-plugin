<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\PopulateTokenListenersTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\ValidSniffs;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
class RegisterEmptyArraySniff implements Sniff
{
    public function register()
    {
        return [];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
