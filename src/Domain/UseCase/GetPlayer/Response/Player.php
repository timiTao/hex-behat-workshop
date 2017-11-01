<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain\UseCase\GetPlayer\Response;

use Workshops\Domain\Player as DomainPlayer;

class Player
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $points;

    public function __construct(DomainPlayer $player)
    {
        $this->name = $player->getName();
        $this->points = $player->getPoints();
    }
}
