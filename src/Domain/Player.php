<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace Workshops\Domain;

class Player
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $points;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->points = 0;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function throwBall()
    {
        $this->points++;
    }

    public function getPoints(): int
    {
        return $this->points;
    }
}