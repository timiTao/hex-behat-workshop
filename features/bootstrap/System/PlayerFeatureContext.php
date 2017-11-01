<?php
/**
 * @author Tomasz Kunicki <kunicki.tomasz@gmail.com>
 */

namespace System;

use Behat\Behat\Context\Context;
use Helpers\Domain\Repository\PlayerRepository;
use PHPUnit\Framework\Assert;
use Workshops\Domain\Player;
use Workshops\Domain\UseCase\GetPlayer\GetPlayerQuery;
use Workshops\Domain\UseCase\GetPlayer\GetPlayerUseCase;
use Workshops\Domain\UseCase\GetPlayer\Response\Player as GetPlayerResponse;
use Workshops\Domain\UseCase\ThrowBall\ThrowBallCommand;
use Workshops\Domain\UseCase\ThrowBall\ThrowBallUseCase;

class PlayerFeatureContext implements Context
{
    /**
     * @var PlayerRepository
     */
    private $playerRepository;

    /**
     * @var GetPlayerUseCase
     */
    private $getPlayerUseCase;

    /**
     * @var GetPlayerResponse
     */
    private $getPlayerResponse;

    /**
     * @var ThrowBallUseCase
     */
    private $throwBallUserCase;

    public function __construct(
        PlayerRepository $playerRepository,
        GetPlayerUseCase $getPlayerUseCase,
        ThrowBallUseCase $throwBallUserCase
    )
    {
        $this->playerRepository = $playerRepository;
        $this->getPlayerUseCase = $getPlayerUseCase;
        $this->throwBallUserCase = $throwBallUserCase;
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
        $this->getPlayerResponse = $this->getPlayerUseCase->handle($query);
    }

    /**
     * @When player :name throw ball
     */
    public function playerThrowBall(string $name)
    {
        $command = new ThrowBallCommand($name);
        $this->throwBallUserCase->handle($command);
    }

    /**
     * @Then player :name should have :points point
     */
    public function playerShouldHavePoint(string $name, int $expectedPoints)
    {
        $query = new GetPlayerQuery($name);
        $response = $this->getPlayerUseCase->handle($query);
        Assert::assertEquals($expectedPoints, $response->points);
    }
}