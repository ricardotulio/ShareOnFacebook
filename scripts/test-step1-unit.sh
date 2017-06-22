#!/bin/bash

echo $(pwd)
docker-compose exec -T magento vendor/bin/phpunit
docker-compose exec magento cp -a build /opt/docker/magento/module/
sudo chown -R $(whoami):$(whoami) build
