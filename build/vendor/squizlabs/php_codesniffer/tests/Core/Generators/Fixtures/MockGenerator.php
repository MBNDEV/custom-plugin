<?php

/**
 * Mock generator class.
 *
 * @copyright 2024 PHPCSStandards and contributors
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/HEAD/licence.txt BSD Licence
 */
namespace _PhpScoperdd275a4cd119\PHP_CodeSniffer\Tests\Core\Generators\Fixtures;

use DOMNode;
use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Generators\Generator;
class MockGenerator extends Generator
{
    /**
     * Process the documentation for a single sniff.
     *
     * @param \DOMNode $doc The DOMNode object for the sniff.
     *
     * @return void
     */
    protected function processSniff(DOMNode $doc)
    {
        echo $this->getTitle($doc), \PHP_EOL;
    }
}
