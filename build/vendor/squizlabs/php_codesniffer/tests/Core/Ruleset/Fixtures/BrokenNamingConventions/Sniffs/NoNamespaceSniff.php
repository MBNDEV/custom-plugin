<?php

namespace _PhpScoperdd275a4cd119;

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\PopulateTokenListenersNamingConventionsTest
 */
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
final class NoNamespaceSniff implements Sniff
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
\class_alias('_PhpScoperdd275a4cd119\NoNamespaceSniff', 'NoNamespaceSniff', \false);
