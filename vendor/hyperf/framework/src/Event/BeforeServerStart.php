<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Framework\Event;

class BeforeServerStart
{
    /**
     * @var string
     */
    public $serverName;

    public function __construct(string $serverName)
    {
        $this->serverName = $serverName;
    }
}
