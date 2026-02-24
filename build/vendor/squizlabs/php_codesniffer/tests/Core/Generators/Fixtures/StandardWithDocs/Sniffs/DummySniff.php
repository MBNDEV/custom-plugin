<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Generators\GeneratorTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\StandardWithDocs\Sniffs;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Files\File;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\Sniff;
abstract class DummySniff implements Sniff
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
