<?php

declare(strict_types=1);

namespace Rest\Doc;

use Psr\Container\ContainerInterface;

class OutOfBoundsHandlerFactory
{
    public function __invoke(ContainerInterface $container) : OutOfBoundsHandler
    {
        return new OutOfBoundsHandler();
    }
}