<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdd275a4cd119\PhpParser\Node\Expr\BinaryOp;
class Plus extends BinaryOp
{
    public function getOperatorSigil(): string
    {
        return '+';
    }
    public function getType(): string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
