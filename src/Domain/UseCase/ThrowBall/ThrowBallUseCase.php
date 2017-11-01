<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain\UseCase\ThrowBall;

use Workshops\Domain\Repository\PlayerRepositoryInterface;

class ThrowBallUseCase
{
    /**
     * @var PlayerRepositoryInterface
     */
    private $playerRepository;

    public function __construct(PlayerRepositoryInterface $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function handle(ThrowBallCommand $command)
    {
        $player = $this->playerRepository->getPlayerByName($command->getPlayerName());
        $player->throwBall();
    }
}
