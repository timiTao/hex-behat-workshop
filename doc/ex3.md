# What to do

We have defined our player.
For now, we need to add action and points that he holds.

We need to refactor everything to use Hexagonal architecture

* switch to git branch 
        
        git checkout ex_basics_2
        
* and base, [run scenario](https://github.com/timiTao/hex-behat-workshop/blob/master/doc/extra.md)

        php vendor/bin/behat
        
* copy feature context class `PlayerFeatureContext` to `features/System/PlayerFeatureContext`
* add configuration for other profile, that will load `System/PlayerFeatureContext`
* refactor that feature context to use points from QUERY.
* run both profiles