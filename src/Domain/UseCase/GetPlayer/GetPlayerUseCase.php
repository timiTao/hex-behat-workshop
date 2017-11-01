<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain\UseCase\GetPlayer;

use Workshops\Domain\Repository\PlayerRepositoryInterface;
use Workshops\Domain\UseCase\GetPlayer\Response\Player;

class GetPlayerUseCase
{
    /**
     * @var PlayerRepositoryInterface
     */
    private $playerRepository;

    public function __construct(PlayerRepositoryInterface $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function handle(GetPlayerQuery $query): Player
    {
        $player = $this->playerRepository->getPlayerByName($query->getName());

        return new Player($player->getName());
    }
}
