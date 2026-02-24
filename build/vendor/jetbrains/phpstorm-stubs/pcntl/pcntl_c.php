<?php

namespace _PhpScoperdd275a4cd119\Pcntl;

/**
 * @since 8.4
 */
enum QosClass implements \UnitEnum
{
    case Background;
    case Utility;
    case Default;
    case UserInitiated;
    case UserInteractive;
    public static function cases(): array
    {
    }
}
