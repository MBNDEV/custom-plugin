<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\StubTests\TestData\Providers\Reflection;

use Exception;
use Generator;
use _PhpScoperdd275a4cd119\StubTests\Model\PHPClass;
use _PhpScoperdd275a4cd119\StubTests\Model\PHPEnum;
use _PhpScoperdd275a4cd119\StubTests\Model\PHPInterface;
use _PhpScoperdd275a4cd119\StubTests\Model\PHPMethod;
use _PhpScoperdd275a4cd119\StubTests\Model\StubProblemType;
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\EntitiesFilter;
use _PhpScoperdd275a4cd119\StubTests\TestData\Providers\ReflectionStubsSingleton;
class ReflectionMethodsProvider
{
    public static function classMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class);
    }
    public static function interfaceMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPInterface::class);
    }
    public static function enumMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPEnum::class);
    }
    public static function classMethodsWithReturnTypeHintProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class, StubProblemType::WRONG_RETURN_TYPEHINT);
    }
    public static function classMethodsWithAccessProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class, StubProblemType::FUNCTION_ACCESS);
    }
    public static function interfaceMethodsWithAccessProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPInterface::class, StubProblemType::FUNCTION_ACCESS);
    }
    public static function enumMethodsWithAccessProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPEnum::class, StubProblemType::FUNCTION_ACCESS);
    }
    public static function classFinalMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class, StubProblemType::WRONG_FINAL_MODIFIER);
    }
    public static function interfaceFinalMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPInterface::class, StubProblemType::WRONG_FINAL_MODIFIER);
    }
    public static function enumFinalMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPEnum::class, StubProblemType::WRONG_FINAL_MODIFIER);
    }
    public static function classStaticMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class, StubProblemType::WRONG_STATIC_MODIFIER);
    }
    public static function interfaceStaticMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPInterface::class, StubProblemType::WRONG_STATIC_MODIFIER);
    }
    public static function enumStaticMethodsProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPEnum::class, StubProblemType::WRONG_STATIC_MODIFIER);
    }
    public static function classMethodsWithParametersProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPClass::class, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH);
    }
    public static function interfaceMethodsWithParametersProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPInterface::class, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH);
    }
    public static function enumMethodsWithParametersProvider(): ?Generator
    {
        return self::yieldFilteredMethods(PHPEnum::class, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH);
    }
    public static function classMethodsWithoutTentitiveReturnTypeProvider(): ?Generator
    {
        $classes = ReflectionStubsSingleton::getReflectionStubs()->getClasses();
        $filteredClasses = EntitiesFilter::getFiltered($classes);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => $method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredClasses), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        /** @var PHPMethod $method */
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    public static function interfaceMethodsWithoutTentitiveReturnTypeProvider(): ?Generator
    {
        $interfaces = ReflectionStubsSingleton::getReflectionStubs()->getInterfaces();
        $filteredInterfaces = EntitiesFilter::getFiltered($interfaces);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => $method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredInterfaces), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    public static function enumMethodsWithoutTentitiveReturnTypeProvider(): ?Generator
    {
        $enums = ReflectionStubsSingleton::getReflectionStubs()->getEnums();
        $filteredEnums = EntitiesFilter::getFiltered($enums);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => $method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredEnums), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    public static function classMethodsWithTentitiveReturnTypeProvider(): ?Generator
    {
        $classes = ReflectionStubsSingleton::getReflectionStubs()->getClasses();
        $filteredClasses = EntitiesFilter::getFiltered($classes);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => !$method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredClasses), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    public static function interfaceMethodsWithTentitiveReturnTypeProvider(): ?Generator
    {
        $interfaces = ReflectionStubsSingleton::getReflectionStubs()->getInterfaces();
        $filteredInterfaces = EntitiesFilter::getFiltered($interfaces);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => !$method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredInterfaces), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    public static function enumMethodsWithTentitiveReturnTypeProvider(): ?Generator
    {
        $enums = ReflectionStubsSingleton::getReflectionStubs()->getEnums();
        $filteredEnums = EntitiesFilter::getFiltered($enums);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, fn(PHPMethod $method) => !$method->isReturnTypeTentative, StubProblemType::HAS_DUPLICATION, StubProblemType::FUNCTION_PARAMETER_MISMATCH, StubProblemType::WRONG_RETURN_TYPEHINT), $filteredEnums), fn($array) => !empty($array));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
    private static function yieldFilteredMethods(string $classType, int ...$problemTypes): ?Generator
    {
        $classes = match ($classType) {
            PHPClass::class => ReflectionStubsSingleton::getReflectionStubs()->getClasses(),
            PHPInterface::class => ReflectionStubsSingleton::getReflectionStubs()->getInterfaces(),
            PHPEnum::class => ReflectionStubsSingleton::getReflectionStubs()->getEnums(),
            default => throw new Exception("Unknows class type"),
        };
        $filteredClasses = EntitiesFilter::getFiltered($classes);
        $toYield = array_filter(array_map(fn($class) => EntitiesFilter::getFiltered($class->methods, null, ...$problemTypes), $filteredClasses), fn($methods) => !empty($methods));
        if (empty($toYield)) {
            yield [null, null];
        }
        foreach ($toYield as $methods) {
            foreach ($methods as $method) {
                yield "Method {$method->parentId}::{$method->name}" => [$method->parentId, $method->name];
            }
        }
    }
}
