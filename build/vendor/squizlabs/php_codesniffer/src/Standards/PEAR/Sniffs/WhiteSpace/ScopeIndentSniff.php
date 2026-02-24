<?php

/**
 * Checks that control structures are structured and indented correctly.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/HEAD/licence.txt BSD Licence
 */
namespace _PhpScoperdd275a4cd119\PHP_CodeSniffer\Standards\PEAR\Sniffs\WhiteSpace;

use _PhpScoperdd275a4cd119\PHP_CodeSniffer\Standards\Generic\Sniffs\WhiteSpace\ScopeIndentSniff as GenericScopeIndentSniff;
class ScopeIndentSniff extends GenericScopeIndentSniff
{
    /**
     * Any scope openers that should not cause an indent.
     *
     * @var int[]
     */
    protected $nonIndentingScopes = [\T_SWITCH];
}
//end class
