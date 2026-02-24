<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node\Expr\AssignOp;

use _PhpScoperdd275a4cd119\PhpParser\Node\Expr\AssignOp;
class BitwiseAnd extends AssignOp
{
    public function getType(): string
    {
        return 'Expr_AssignOp_BitwiseAnd';
    }
}
