<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\PhpParser\Node\Scalar\MagicConst;

use _PhpScoperdd275a4cd119\PhpParser\Node\Scalar\MagicConst;
class Trait_ extends MagicConst
{
    public function getName(): string
    {
        return '__TRAIT__';
    }
    public function getType(): string
    {
        return 'Scalar_MagicConst_Trait';
    }
}
