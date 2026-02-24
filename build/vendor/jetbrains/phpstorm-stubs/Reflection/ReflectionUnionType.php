<?php

namespace _PhpScoperdd275a4cd119;

use _PhpScoperdd275a4cd119\JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use _PhpScoperdd275a4cd119\JetBrains\PhpStorm\Pure;
/**
 * @since 8.0
 */
class ReflectionUnionType extends \ReflectionType
{
    /**
     * Get list of types of union type
     *
     * @return ReflectionNamedType[]|ReflectionIntersectionType[]
     */
    #[Pure]
    #[LanguageLevelTypeAware(['8.2' => 'ReflectionNamedType[]|ReflectionIntersectionType[]'], default: 'ReflectionNamedType[]')]
    public function getTypes(): array
    {
    }
}
/**
 * @since 8.0
 */
\class_alias('_PhpScoperdd275a4cd119\ReflectionUnionType', 'ReflectionUnionType', \false);
