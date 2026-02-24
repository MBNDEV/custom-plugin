<?php

declare (strict_types=1);
namespace _PhpScoperdd275a4cd119\Swoole\WebSocket;

class CloseFrame extends Frame
{
    public $opcode = 8;
    public $code = 1000;
    public $reason = '';
}
