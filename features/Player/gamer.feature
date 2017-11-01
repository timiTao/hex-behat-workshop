@player_domain
@basics
Feature: Player
  In order to use system
  As system
  I need to be able to define player

  Scenario: Define exist of player
    Given player "Ed"
    Then player "Ed" exist