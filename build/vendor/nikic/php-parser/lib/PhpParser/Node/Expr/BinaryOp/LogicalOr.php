<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdd275a4cd119\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends BinaryOp
{
    public function getOperatorSigil(): string
    {
        return 'or';
    }
    public function getType(): string
    {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
