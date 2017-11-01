<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Helpers;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

class Container implements ContainerInterface
{
    private $list = [];

    static public function factory(): ContainerInterface
    {
        $container = new self();

        return $container;
    }

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new ServiceNotFoundException($id);
        }
        return $this->list[$id];
    }

    public function has($id)
    {
        return array_key_exists($id, $this->list);
    }
}
