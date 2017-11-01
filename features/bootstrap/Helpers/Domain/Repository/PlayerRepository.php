<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Helpers\Domain\Repository;

use Workshops\Domain\Player;
use Workshops\Domain\Repository\PlayerRepositoryInterface;

class PlayerRepository implements PlayerRepositoryInterface
{
    /**
     * @var Player[]
     */
    private $players = [];

    public function getPlayerByName(string $name): Player
    {
        if (array_key_exists($name, $this->players)) {
            return $this->players[$name];
        }
        throw new \Exception('Player not found: ' . $name);
    }

    public function add(Player $player)
    {
        $this->players[$player->getName()] = $player;
    }
}
