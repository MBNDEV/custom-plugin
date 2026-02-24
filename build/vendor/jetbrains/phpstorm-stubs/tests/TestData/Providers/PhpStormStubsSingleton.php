<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\StubTests\TestData\Providers;

use _PhpScoperdd275a4cd119\StubTests\Model\StubsContainer;
use _PhpScoperdd275a4cd119\StubTests\Parsers\StubParser;
class PhpStormStubsSingleton
{
    private static ?StubsContainer $phpstormStubs = null;
    public static function getPhpStormStubs(): StubsContainer
    {
        if (self::$phpstormStubs === null) {
            self::$phpstormStubs = StubParser::getPhpStormStubs();
        }
        return self::$phpstormStubs;
    }
}
