<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node\Stmt;

use _PhpScoperdd275a4cd119\PhpParser\Node;
abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public ?Node\Name $trait;
    /** @var Node\Identifier Method name */
    public Node\Identifier $method;
}
