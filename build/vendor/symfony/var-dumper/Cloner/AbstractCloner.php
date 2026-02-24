<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Cloner;

use _PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\Caster;
use _PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Exception\ThrowingCasterException;
/**
 * AbstractCloner implements a generic caster mechanism for objects and resources.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
abstract class AbstractCloner implements ClonerInterface
{
    public static array $defaultCasters = ['__PHP_Incomplete_Class' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\Caster', 'castPhpIncompleteClass'], 'AddressInfo' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AddressInfoCaster', 'castAddressInfo'], 'Socket' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SocketCaster', 'castSocket'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\CutStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'castStub'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\CutArrayStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'castCutArray'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ConstStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'castStub'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\EnumStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'castEnum'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ScalarStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'castScalar'], 'Fiber' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\FiberCaster', 'castFiber'], 'Closure' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClosure'], 'Generator' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castGenerator'], 'ReflectionType' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castType'], 'ReflectionAttribute' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castAttribute'], 'ReflectionGenerator' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castReflectionGenerator'], 'ReflectionClass' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClass'], 'ReflectionClassConstant' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castClassConstant'], 'ReflectionFunctionAbstract' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castFunctionAbstract'], 'ReflectionMethod' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castMethod'], 'ReflectionParameter' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castParameter'], 'ReflectionProperty' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castProperty'], 'ReflectionReference' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castReference'], 'ReflectionExtension' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castExtension'], 'ReflectionZendExtension' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ReflectionCaster', 'castZendExtension'], '_PhpScoperdd275a4cd119\Doctrine\Common\Persistence\ObjectManager' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Doctrine\Common\Proxy\Proxy' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castCommonProxy'], '_PhpScoperdd275a4cd119\Doctrine\ORM\Proxy\Proxy' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castOrmProxy'], '_PhpScoperdd275a4cd119\Doctrine\ORM\PersistentCollection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DoctrineCaster', 'castPersistentCollection'], '_PhpScoperdd275a4cd119\Doctrine\Persistence\ObjectManager' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'DOMException' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castException'], '_PhpScoperdd275a4cd119\Dom\Exception' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castException'], 'DOMStringList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMNameList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMImplementation' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castImplementation'], '_PhpScoperdd275a4cd119\Dom\Implementation' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castImplementation'], 'DOMImplementationList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMNode' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\Node' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMNameSpaceNode' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMDocument' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDocument'], '_PhpScoperdd275a4cd119\Dom\XMLDocument' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castXMLDocument'], '_PhpScoperdd275a4cd119\Dom\HTMLDocument' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castHTMLDocument'], 'DOMNodeList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\NodeList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMNamedNodeMap' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\DTDNamedNodeMap' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'DOMXPath' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\XPath' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\HTMLCollection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], '_PhpScoperdd275a4cd119\Dom\TokenList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DOMCaster', 'castDom'], 'XMLReader' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\XmlReaderCaster', 'castXmlReader'], 'ErrorException' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castErrorException'], 'Exception' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castException'], 'Error' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castError'], '_PhpScoperdd275a4cd119\Symfony\Bridge\Monolog\Logger' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Symfony\Component\DependencyInjection\ContainerInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Symfony\Component\EventDispatcher\EventDispatcherInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\AmpHttpClient' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\CurlHttpClient' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\NativeHttpClient' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClient'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\Response\AmpResponse' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\Response\AmpResponseV4' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\Response\AmpResponseV5' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\Response\CurlResponse' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpClient\Response\NativeResponse' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castHttpClientResponse'], '_PhpScoperdd275a4cd119\Symfony\Component\HttpFoundation\Request' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castRequest'], '_PhpScoperdd275a4cd119\Symfony\Component\Uid\Ulid' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castUlid'], '_PhpScoperdd275a4cd119\Symfony\Component\Uid\Uuid' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castUuid'], '_PhpScoperdd275a4cd119\Symfony\Component\VarExporter\Internal\LazyObjectState' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SymfonyCaster', 'castLazyObjectState'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Exception\ThrowingCasterException' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castThrowingCasterException'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\TraceStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castTraceStub'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\FrameStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castFrameStub'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Cloner\AbstractCloner' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Symfony\Component\ErrorHandler\Exception\FlattenException' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castFlattenException'], '_PhpScoperdd275a4cd119\Symfony\Component\ErrorHandler\Exception\SilencedErrorContext' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ExceptionCaster', 'castSilencedErrorContext'], '_PhpScoperdd275a4cd119\Imagine\Image\ImageInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ImagineCaster', 'castImage'], '_PhpScoperdd275a4cd119\Ramsey\Uuid\UuidInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\UuidCaster', 'castRamseyUuid'], '_PhpScoperdd275a4cd119\ProxyManager\Proxy\ProxyInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ProxyManagerCaster', 'castProxy'], 'PHPUnit_Framework_MockObject_MockObject' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\PHPUnit\Framework\MockObject\MockObject' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\PHPUnit\Framework\MockObject\Stub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Prophecy\Prophecy\ProphecySubjectInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], '_PhpScoperdd275a4cd119\Mockery\MockInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\StubCaster', 'cutInternals'], 'PDO' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\PdoCaster', 'castPdo'], 'PDOStatement' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\PdoCaster', 'castPdoStatement'], 'AMQPConnection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castConnection'], 'AMQPChannel' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castChannel'], 'AMQPQueue' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castQueue'], 'AMQPExchange' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castExchange'], 'AMQPEnvelope' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\AmqpCaster', 'castEnvelope'], 'ArrayObject' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castArrayObject'], 'ArrayIterator' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castArrayIterator'], 'SplDoublyLinkedList' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castDoublyLinkedList'], 'SplFileInfo' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castFileInfo'], 'SplFileObject' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castFileObject'], 'SplHeap' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castHeap'], 'SplObjectStorage' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castObjectStorage'], 'SplPriorityQueue' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castHeap'], 'OuterIterator' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castOuterIterator'], 'WeakMap' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castWeakMap'], 'WeakReference' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SplCaster', 'castWeakReference'], 'Redis' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedis'], '_PhpScoperdd275a4cd119\Relay\Relay' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedis'], 'RedisArray' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedisArray'], 'RedisCluster' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RedisCaster', 'castRedisCluster'], 'DateTimeInterface' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DateCaster', 'castDateTime'], 'DateInterval' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DateCaster', 'castInterval'], 'DateTimeZone' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DateCaster', 'castTimeZone'], 'DatePeriod' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DateCaster', 'castPeriod'], 'GMP' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\GmpCaster', 'castGmp'], 'MessageFormatter' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\IntlCaster', 'castMessageFormatter'], 'NumberFormatter' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\IntlCaster', 'castNumberFormatter'], 'IntlTimeZone' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlTimeZone'], 'IntlCalendar' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlCalendar'], 'IntlDateFormatter' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\IntlCaster', 'castIntlDateFormatter'], 'Memcached' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\MemcachedCaster', 'castMemcached'], '_PhpScoperdd275a4cd119\Ds\Collection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DsCaster', 'castCollection'], '_PhpScoperdd275a4cd119\Ds\Map' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DsCaster', 'castMap'], '_PhpScoperdd275a4cd119\Ds\Pair' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DsCaster', 'castPair'], '_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DsPairStub' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\DsCaster', 'castPairStub'], 'mysqli_driver' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\MysqliCaster', 'castMysqliDriver'], 'CurlHandle' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\CurlCaster', 'castCurl'], '_PhpScoperdd275a4cd119\Dba\Connection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castDba'], ':dba' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castDba'], ':dba persistent' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castDba'], 'GdImage' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\GdCaster', 'castGd'], 'SQLite3Result' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\SqliteCaster', 'castSqlite3Result'], '_PhpScoperdd275a4cd119\PgSql\Lob' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castLargeObject'], '_PhpScoperdd275a4cd119\PgSql\Connection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castLink'], '_PhpScoperdd275a4cd119\PgSql\Result' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\PgSqlCaster', 'castResult'], ':process' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castProcess'], ':stream' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStream'], 'OpenSSLAsymmetricKey' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\OpenSSLCaster', 'castOpensslAsymmetricKey'], 'OpenSSLCertificateSigningRequest' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\OpenSSLCaster', 'castOpensslCsr'], 'OpenSSLCertificate' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\OpenSSLCaster', 'castOpensslX509'], ':persistent stream' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStream'], ':stream-context' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\ResourceCaster', 'castStreamContext'], 'XmlParser' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\XmlResourceCaster', 'castXml'], 'RdKafka' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castRdKafka'], '_PhpScoperdd275a4cd119\RdKafka\Conf' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castConf'], '_PhpScoperdd275a4cd119\RdKafka\KafkaConsumer' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castKafkaConsumer'], '_PhpScoperdd275a4cd119\RdKafka\Metadata\Broker' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castBrokerMetadata'], '_PhpScoperdd275a4cd119\RdKafka\Metadata\Collection' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castCollectionMetadata'], '_PhpScoperdd275a4cd119\RdKafka\Metadata\Partition' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castPartitionMetadata'], '_PhpScoperdd275a4cd119\RdKafka\Metadata\Topic' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicMetadata'], '_PhpScoperdd275a4cd119\RdKafka\Message' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castMessage'], '_PhpScoperdd275a4cd119\RdKafka\Topic' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopic'], '_PhpScoperdd275a4cd119\RdKafka\TopicPartition' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicPartition'], '_PhpScoperdd275a4cd119\RdKafka\TopicConf' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\RdKafkaCaster', 'castTopicConf'], '_PhpScoperdd275a4cd119\FFI\CData' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\FFICaster', 'castCTypeOrCData'], '_PhpScoperdd275a4cd119\FFI\CType' => ['_PhpScoperdd275a4cd119\Symfony\Component\VarDumper\Caster\FFICaster', 'castCTypeOrCData']];
    protected int $maxItems = 2500;
    protected int $maxString = -1;
    protected int $minDepth = 1;
    /**
     * @var array<string, list<callable>>
     */
    private array $casters = [];
    /**
     * @var callable|null
     */
    private $prevErrorHandler;
    private array $classInfo = [];
    private int $filter = 0;
    /**
     * @param callable[]|null $casters A map of casters
     *
     * @see addCasters
     */
    public function __construct(?array $casters = null)
    {
        $this->addCasters($casters ?? static::$defaultCasters);
    }
    /**
     * Adds casters for resources and objects.
     *
     * Maps resources or object types to a callback.
     * Use types as keys and callable casters as values.
     * Prefix types with `::`,
     * see e.g. self::$defaultCasters.
     *
     * @param array<string, callable> $casters A map of casters
     */
    public function addCasters(array $casters): void
    {
        foreach ($casters as $type => $callback) {
            $this->casters[$type][] = $callback;
        }
    }
    /**
     * Adds default casters for resources and objects.
     *
     * Maps resources or object types to a callback.
     * Use types as keys and callable casters as values.
     * Prefix types with `::`,
     * see e.g. self::$defaultCasters.
     *
     * @param array<string, callable> $casters A map of casters
     */
    public static function addDefaultCasters(array $casters): void
    {
        self::$defaultCasters = [...self::$defaultCasters, ...$casters];
    }
    /**
     * Sets the maximum number of items to clone past the minimum depth in nested structures.
     */
    public function setMaxItems(int $maxItems): void
    {
        $this->maxItems = $maxItems;
    }
    /**
     * Sets the maximum cloned length for strings.
     */
    public function setMaxString(int $maxString): void
    {
        $this->maxString = $maxString;
    }
    /**
     * Sets the minimum tree depth where we are guaranteed to clone all the items.  After this
     * depth is reached, only setMaxItems items will be cloned.
     */
    public function setMinDepth(int $minDepth): void
    {
        $this->minDepth = $minDepth;
    }
    /**
     * Clones a PHP variable.
     *
     * @param int $filter A bit field of Caster::EXCLUDE_* constants
     */
    public function cloneVar(mixed $var, int $filter = 0): Data
    {
        $this->prevErrorHandler = set_error_handler(function ($type, $msg, $file, $line, $context = []) {
            if (\E_RECOVERABLE_ERROR === $type || \E_USER_ERROR === $type) {
                // Cloner never dies
                throw new \ErrorException($msg, 0, $type, $file, $line);
            }
            if ($this->prevErrorHandler) {
                return ($this->prevErrorHandler)($type, $msg, $file, $line, $context);
            }
            return \false;
        });
        $this->filter = $filter;
        if ($gc = gc_enabled()) {
            gc_disable();
        }
        try {
            return new Data($this->doClone($var));
        } finally {
            if ($gc) {
                gc_enable();
            }
            restore_error_handler();
            $this->prevErrorHandler = null;
        }
    }
    /**
     * Effectively clones the PHP variable.
     */
    abstract protected function doClone(mixed $var): array;
    /**
     * Casts an object to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     */
    protected function castObject(Stub $stub, bool $isNested): array
    {
        $obj = $stub->value;
        $class = $stub->class;
        if (str_contains($class, "@anonymous\x00")) {
            $stub->class = get_debug_type($obj);
        }
        if (isset($this->classInfo[$class])) {
            [$i, $parents, $hasDebugInfo, $fileInfo] = $this->classInfo[$class];
        } else {
            $i = 2;
            $parents = [$class];
            $hasDebugInfo = method_exists($class, '__debugInfo');
            foreach (class_parents($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            foreach (class_implements($class) as $p) {
                $parents[] = $p;
                ++$i;
            }
            $parents[] = '*';
            $r = new \ReflectionClass($class);
            $fileInfo = $r->isInternal() || $r->isSubclassOf(Stub::class) ? [] : ['file' => $r->getFileName(), 'line' => $r->getStartLine()];
            $this->classInfo[$class] = [$i, $parents, $hasDebugInfo, $fileInfo];
        }
        $stub->attr += $fileInfo;
        $a = Caster::castObject($obj, $class, $hasDebugInfo, $stub->class);
        try {
            while ($i--) {
                if (!empty($this->casters[$p = $parents[$i]])) {
                    foreach ($this->casters[$p] as $callback) {
                        $a = $callback($obj, $a, $stub, $isNested, $this->filter);
                    }
                }
            }
        } catch (\Exception $e) {
            $a = [(Stub::TYPE_OBJECT === $stub->type ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
    /**
     * Casts a resource to an array representation.
     *
     * @param bool $isNested True if the object is nested in the dumped structure
     */
    protected function castResource(Stub $stub, bool $isNested): array
    {
        $a = [];
        $res = $stub->value;
        $type = $stub->class;
        try {
            if (!empty($this->casters[':' . $type])) {
                foreach ($this->casters[':' . $type] as $callback) {
                    $a = $callback($res, $a, $stub, $isNested, $this->filter);
                }
            }
        } catch (\Exception $e) {
            $a = [(Stub::TYPE_OBJECT === $stub->type ? Caster::PREFIX_VIRTUAL : '') . '⚠' => new ThrowingCasterException($e)] + $a;
        }
        return $a;
    }
}
