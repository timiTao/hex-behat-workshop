<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Helpers;

use Helpers\Domain\Repository\PlayerRepository;
use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use Workshops\Domain\UseCase\GetPlayer\GetPlayerUseCase;
use Workshops\Domain\UseCase\ThrowBall\ThrowBallUseCase;

class Container implements ContainerInterface
{
    private $list = [];

    static public function factory(): ContainerInterface
    {
        $container = new Container();

        $container->list['player_repository'] = new PlayerRepository();

        $container->list['use_case.get_player'] = new GetPlayerUseCase(
            $container->get('player_repository')
        );
        $container->list['use_case.throw_ball'] = new ThrowBallUseCase(
            $container->get('player_repository')
        );

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
