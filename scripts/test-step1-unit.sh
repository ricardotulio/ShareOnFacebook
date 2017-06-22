#!/bin/bash

docker-compose exec -T magento vendor/bin/phpunit \
    --coverage-clover /opt/docker/magento/module/build/logs/clover.xml
sudo chown -R $(whoami):$(whoami) build
