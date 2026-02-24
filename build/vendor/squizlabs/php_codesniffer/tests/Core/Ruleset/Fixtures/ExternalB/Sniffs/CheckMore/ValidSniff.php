<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\ExpandRulesetReferenceTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\ExternalB\Sniffs\CheckMore;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
class ValidSniff implements Sniff
{
    public function register()
    {
        return [\T_CLASS];
    }
    public function process(File $phpcsFile, $stackPtr)
    {
        // Do something.
    }
}
