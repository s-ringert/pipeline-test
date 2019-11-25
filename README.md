# About
* This is a PHP 7.2 Docker Skeleton with Zend Expressive and Doctrine

# Setup
* clone repo
* copy env file for dbroot pw
* copy config files
* composer install
* docker-compose up

# Helpful commands
## Run Composer
```shell
sudo docker-compose run docker-php-fpm composer
```
## Run CI check
```shell
sudo docker-compose run docker-php-fpm composer check
```

## Run Doctrine
```shell
sudo docker-compose run docker-php-fpm composer doctrine
```

# TODO
* travis report broken steps
* travis auto deploy
