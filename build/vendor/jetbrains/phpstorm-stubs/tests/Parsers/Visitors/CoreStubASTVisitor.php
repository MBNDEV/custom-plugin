<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\StubTests\Parsers\Visitors;

use _PhpScoperdd275a4cd119\StubTests\Model\StubsContainer;
class CoreStubASTVisitor extends ASTVisitor
{
    public function __construct(StubsContainer $stubs, array &$entitiesToUpdate)
    {
        parent::__construct($stubs, $entitiesToUpdate);
        $this->isStubCore = \true;
    }
}
