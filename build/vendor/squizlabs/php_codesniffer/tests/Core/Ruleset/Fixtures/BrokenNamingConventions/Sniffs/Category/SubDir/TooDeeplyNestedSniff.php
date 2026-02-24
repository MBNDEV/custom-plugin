<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\RulesetPopulateTokenListenersNamingConventionsTest
 */
namespace _PhpScoperdd275a4cd119\BrokenNamingConventions\Sniffs\Category\SubDir;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
final class TooDeeplyNestedSniff implements Sniff
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
