<?php

/**
 * Test fixture.
 *
 * @see \PHP_CodeSniffer\Tests\Core\Ruleset\RegisterSniffsMissingInterfaceTest
 */
namespace _PhpScoperdd275a4cd119\Fixtures\TestStandard\Sniffs\MissingInterface;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Sniffs\AbstractArraySniff;
final class ValidImplementsViaAbstractSniff extends AbstractArraySniff
{
    protected function processSingleLineArray($phpcsFile, $stackPtr, $arrayStart, $arrayEnd, $indices)
    {
        // Do something.
    }
    protected function processMultiLineArray($phpcsFile, $stackPtr, $arrayStart, $arrayEnd, $indices)
    {
        // Do something.
    }
}
