# Advice 

### General

* For PHPStorm users, install plugin `Behat Support`. Useful to go from scenario, to step in context class.
        
### To run Behat

        php vendor/bin/behat
        
### To run Behat by docker add before `docker-compose run`

        docker-compose run php vendor/bin/behat 
        
### Behat parameters for filtering

        php vendor/bin/behat -p PROFILE_NAME
        
        php vendor/bin/behat -s SUITE_NAME
        
        php vendor/bin/behat --tags=TAG