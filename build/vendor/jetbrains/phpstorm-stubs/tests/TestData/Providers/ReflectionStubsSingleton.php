<?php

namespace _PhpScoperdd275a4cd119\StubTests\TestData\Providers;

use _PhpScoperdd275a4cd119\StubTests\Model\StubsContainer;
use _PhpScoperdd275a4cd119\StubTests\Parsers\PHPReflectionParser;
class ReflectionStubsSingleton
{
    /**
     * @var StubsContainer|null
     */
    private static $reflectionStubs;
    /**
     * @return StubsContainer
     */
    public static function getReflectionStubs()
    {
        if (self::$reflectionStubs === null) {
            self::$reflectionStubs = PHPReflectionParser::getStubs();
        }
        return self::$reflectionStubs;
    }
}
