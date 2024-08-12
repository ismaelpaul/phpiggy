<?php

declare(strict_types=1);

namespace Framework\Contracts;

class MiddlewareInterface
{
    public function process(callable $next) {}
}
