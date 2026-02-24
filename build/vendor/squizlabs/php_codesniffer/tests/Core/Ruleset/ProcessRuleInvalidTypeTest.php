<?php

/**
 * Test handling of invalid type elements.
 *
 * @author    Juliette Reinders Folmer <phpcs_nospam@adviesenzo.nl>
 * @copyright 2024 PHPCSStandards and contributors
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/HEAD/licence.txt BSD Licence
 */
namespace _PhpScoperdd275a4cd119\PHP_CodeSniffer\Tests\Core\Ruleset;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Ruleset;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Tests\ConfigDouble;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Tests\Core\Ruleset\AbstractRulesetTestCase;
/**
 * Test handling of invalid type elements.
 *
 * @covers \PHP_CodeSniffer\Ruleset::processRule
 */
final class ProcessRuleInvalidTypeTest extends AbstractRulesetTestCase
{
    /**
     * Test displaying an error when an invalid type is given.
     *
     * @return void
     */
    public function testInvalidTypeHandling()
    {
        $standard = __DIR__ . '/ProcessRuleInvalidTypeTest.xml';
        $config = new ConfigDouble(["--standard={$standard}"]);
        $message = 'ERROR: Message type "notice" for "Generic.Files.ByteOrderMark" is invalid; must be "error" or "warning".' . \PHP_EOL . \PHP_EOL;
        $this->expectRuntimeExceptionMessage($message);
        new Ruleset($config);
    }
    //end testInvalidTypeHandling()
}
//end class
