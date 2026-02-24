<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\PopulateTokenListenersSupportedTokenizersTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\SupportedTokenizers;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
class ListensForUnrecognizedTokenizersSniff implements Sniff
{
    public $supportedTokenizers = ['SCSS', 'TypeScript'];
    public function register()
    {
        return [\T_WHITESPACE];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
