<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node;

use _PhpScoperdd275a4cd119\PhpParser\NodeAbstract;
/**
 * Represents the "..." in "foo(...)" of the first-class callable syntax.
 */
class VariadicPlaceholder extends NodeAbstract
{
    /**
     * Create a variadic argument placeholder (first-class callable syntax).
     *
     * @param array<string, mixed> $attributes Additional attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }
    public function getType(): string
    {
        return 'VariadicPlaceholder';
    }
    public function getSubNodeNames(): array
    {
        return [];
    }
}
