<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain\UseCase\ThrowBall;

class ThrowBallCommand
{
    /**
     * @var string
     */
    private $playerName;

    public function __construct(string $playerName)
    {
        $this->playerName = $playerName;
    }

    public function getPlayerName(): string
    {
        return $this->playerName;
    }
}
