<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\SetSniffPropertyTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\SetProperty;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
class AllowedAsDeclaredSniff implements Sniff
{
    public $arbitrarystring;
    public $arbitraryarray;
    public function register()
    {
        return [\T_WHITESPACE];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
