# What to do

We have defined our player.
For now, we need to add action and points that he holds.

We need to refactor everything to use Hexagonal architecture

* switch to git branch 
        
        git checkout ex_basics_2
        
* and base, [run scenario](https://github.com/timiTao/hex-behat-workshop/blob/master/doc/extra.md)

        php vendor/bin/behat
        
* add command to thow ball by username
* refactor `PlayerFeatureContext` to use full only `Command`.
* RUN BEHAT
* add to response from Query player's points.