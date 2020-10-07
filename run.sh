#!/bin/sh
cp .env.example .env && \
docker-compose up -d && \
composer install && \
php bin/console doctrine:migrations:migrate && \
symfony server:start
