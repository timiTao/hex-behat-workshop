<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain\Repository;

use Workshops\Domain\Player;

interface PlayerRepositoryInterface
{
    public function getPlayerByName(string $name): Player;
}