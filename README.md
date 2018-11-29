# About
* This is a PHP 7.1 Docker Skeleton with Zend Expressive and Doctrine

# Setup
* clone repo
* copy env file for dbroot pw
* copy config files
* composer install
* docker-compose up

# Helpful commands
## Run Composer
```shell
sudo docker run --rm --interactive --tty --volume $PWD:/app composer composer
```
## Run CI check
```shell
sudo docker run --rm --interactive --tty --volume $PWD:/app composer composer check
```

# TODO
* install doctrine
* default doctrine routes
* default unit test
* deploy to docker hub
* pull from docker hub and load to server
* automatic build and deploy
