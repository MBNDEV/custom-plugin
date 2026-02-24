<?php

namespace _PhpScoperdd275a4cd119\StubTests\Tools;

require_once 'ModelAutoloader.php';
ModelAutoloader::register();
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\ReflectionStubsSingleton;
$reflectionFileName = $argv[1];
if (file_exists($reflectionFileName)) {
    unlink($reflectionFileName);
}
file_put_contents(__DIR__ . "/../../{$reflectionFileName}", serialize(ReflectionStubsSingleton::getReflectionStubs()));
