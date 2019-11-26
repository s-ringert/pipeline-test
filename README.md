# About
* This is a PHP 7.2 Skeleton 
* Zend Expressive 
* Doctrine
* Twig
* CI/CD with travis
* Docker
* [![Build Status](https://travis-ci.org/s-ringert/skeleton.svg?branch=master)](https://travis-ci.org/s-ringert/skeleton)

# Setup
* clone repo
* copy env file for dbroot pw
* copy config files
* composer install
* docker-compose up

# Helpful commands
## Start Application
```shell
sudo docker-compose up
```
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
* travis auto deploy
* update twig template
