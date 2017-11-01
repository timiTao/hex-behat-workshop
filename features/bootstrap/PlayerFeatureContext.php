<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

use Behat\Behat\Context\Context;
use Helpers\Domain\Repository\PlayerRepository;
use PHPUnit\Framework\Assert;
use Workshops\Domain\Player;
use Workshops\Domain\UseCase\GetPlayer\GetPlayerQuery;
use Workshops\Domain\UseCase\GetPlayer\GetPlayerUseCase;
use Workshops\Domain\UseCase\GetPlayer\Response\Player as GetPlayerResponse;

class PlayerFeatureContext implements Context
{
    /**
     * @var PlayerRepository
     */
    private $playerRepository;

    /**
     * @var GetPlayerUseCase
     */
    private $useCase;

    /**
     * @var GetPlayerResponse
     */
    private $getPlayerResponse;

    /**
     */
    public function __construct()
    {
        $this->playerRepository = new PlayerRepository();
        $this->useCase = new GetPlayerUseCase($this->playerRepository);
    }

    /**
     * @Given player :name
     */
    public function player(string $name)
    {
        $this->playerRepository->add(new Player($name));
    }

    /**
     * @Then player :expectedName exist
     */
    public function playerExist(string $expectedName)
    {
        $query = new GetPlayerQuery($expectedName);
        $this->getPlayerResponse = $this->useCase->handle($query);
    }

    /**
     * @When player :name throw ball
     */
    public function playerThrowBall(string $name)
    {
        $player = $this->playerRepository->getPlayerByName($name);
        $player->throwBall();
    }

    /**
     * @Then player :name should have :points point
     */
    public function playerShouldHavePoint(string $name, int $expectedPoints)
    {
        $player = $this->playerRepository->getPlayerByName($name);
        Assert::assertEquals($expectedPoints, $player->getPoints());
    }
}