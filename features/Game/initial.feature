Feature: Basic game
  In order to get round
  As system
  I need to be able to define game

  Scenario: Define basic of game
    Given player "Ed"
    Then player "Ed" should have "0" point

  Scenario: Player throw ball after initialization
    Given player "Ed"
    When player "Ed" throw ball
    Then player "Ed" should have "1" point