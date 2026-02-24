<?php

namespace _PhpScoperdd275a4cd119\StubTests;

use _PhpScoperdd275a4cd119\PHPUnit\Framework\Attributes\DataProviderExternal;
use RecursiveArrayIterator;
use RecursiveIteratorIterator;
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\PhpStormStubsSingleton;
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\Stubs\PhpCoreStubsProvider;
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\Stubs\StubsTestDataProviders;
class StubsStructureTest extends AbstractBaseStubsTestCase
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        PhpStormStubsSingleton::getPhpStormStubs();
    }
    #[DataProviderExternal(StubsTestDataProviders::class, 'stubsDirectoriesProvider')]
    public function testStubsDirectoryExistInMap($directory)
    {
        self::assertContains($directory, iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator(PhpCoreStubsProvider::$StubDirectoryMap)), \false), "Stubs directories provider doesn't contain '{$directory}'. Please add '{$directory}' to 'PhpCoreStubsProvider::StubDirectoryMap'");
    }
}
