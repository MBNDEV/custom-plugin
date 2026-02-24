<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\SetSniffPropertyTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\SetProperty;

use AllowDynamicProperties;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
#[AllowDynamicProperties]
class NotAllowedViaAttributeSniff implements Sniff
{
    public function register()
    {
        return [\T_WHITESPACE];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
