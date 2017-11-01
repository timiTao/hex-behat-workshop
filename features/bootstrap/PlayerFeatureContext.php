<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

use Behat\Behat\Context\Context;
use Workshops\Domain\Player;
use PHPUnit\Framework\Assert;

class PlayerFeatureContext implements Context
{
    /**
     * @var Player
     */
    private $player;

    /**
     * @Given player :name
     */
    public function player(string $name)
    {
        $this->player = new Player($name);
    }

    /**
     * @Then player :expectedName exist
     */
    public function playerExist(string $expectedName)
    {
        Assert::assertEquals($expectedName, $this->player->getName());
    }

    /**
     * @When player throw ball
     */
    public function playerThrowBall()
    {
        $this->player->throwBall();
    }

    /**
     * @Then player should have :points point
     */
    public function playerShouldHavePoint(int $expectedPoints)
    {
        Assert::assertEquals($expectedPoints, $this->player->getPoints());
    }
}