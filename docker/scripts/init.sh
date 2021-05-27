#!/bin/bash

docker exec -it SellingFurniture_php bash
php artisan key:generate
php artisan optimize:clear
php artisan migrate:fresh --seed
php artisan storage:link
