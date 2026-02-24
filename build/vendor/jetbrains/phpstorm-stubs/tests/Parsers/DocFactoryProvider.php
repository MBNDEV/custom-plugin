<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\StubTests\Parsers;

use _PhpScoperdd275a4cd119\phpDocumentor\Reflection\DocBlockFactory;
use _PhpScoperdd275a4cd119\StubTests\Model\Tags\RemovedTag;
class DocFactoryProvider
{
    private static ?DocBlockFactory $docFactory = null;
    public static function getDocFactory(): DocBlockFactory
    {
        if (self::$docFactory === null) {
            self::$docFactory = DocBlockFactory::createInstance(['removed' => RemovedTag::class]);
        }
        return self::$docFactory;
    }
}
