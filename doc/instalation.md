# Installation

### Standard

1. Clone repository

        git clone https://github.com/timiTao/hex-behat-workshop.git
        
2. Go to cloned repository and fetch all needed branches

        git fetch origin ex_basics_1
        git fetch origin ex_basics_1_result
        git fetch origin ex_basics_2
        git fetch origin ex_basics_2_result
        git fetch origin ex_basics_3
        git fetch origin ex_basics_3_result
        git fetch origin ex_basics_3_result_adv
        git fetch origin ex_basics_3_result_cont

OR
        
        git fetch origin ex_basics_1 && git fetch origin ex_basics_1_result && git fetch origin ex_basics_2 && git fetch origin ex_basics_2_result && git fetch origin ex_basics_3 && git fetch origin ex_basics_3_result && git fetch origin ex_basics_3_result_adv && git fetch origin ex_basics_3_result_cont

3. [Install composer following link](https://getcomposer.org/download/) and next library:

        composer install 
        
### Docker 

1. Clone repository

        git clone https://github.com/timiTao/hex-behat-workshop.git
        
2. Go to cloned repository and fetch all needed branches

        git fetch origin ex_basics_1
        git fetch origin ex_basics_1_result
        git fetch origin ex_basics_2
        git fetch origin ex_basics_2_result
        git fetch origin ex_basics_3
        git fetch origin ex_basics_3_result
        git fetch origin ex_basics_3_result_adv
        git fetch origin ex_basics_3_result_cont

OR
        
        git fetch origin ex_basics_1 && git fetch origin ex_basics_1_result && git fetch origin ex_basics_2 && git fetch origin ex_basics_2_result && git fetch origin ex_basics_3 && git fetch origin ex_basics_3_result && git fetch origin ex_basics_3_result_adv && git fetch origin ex_basics_3_result_cont

3. Install library by docker-composer

        docker-compose run composer install
        
### Comment

Finally, you should have all needed libraries and branches with next exercises.
        
# Extra advice

* For PHPStorm users, install plugin `Behat Support`. Useful to go from scenario, to step in context class.
        
        