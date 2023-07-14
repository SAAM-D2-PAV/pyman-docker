# DOCKER PHP TEMPLATE VERSION SYMFONY
## symfony/skeleton:"6.3.*"
### version juin 2023
https://www.docker.com/

## Installation


```sh
git clone https://github.com/SAAM-D2-PAV/docker-php.git
git checkout docker-symfony

cd app/
touch .env.local

// ajouter les élément suivants au fichier
MYSQL_PORT=3306
MYSQL_PASSWORD=secret
MYSQL_DATABASE=docker-symfony
MYSQL_USER=user
REDIS_PORT=6379
XDEBUG_MODE=debug
BUILD_TARGET=app_dev

cd ..
sh ./bin/dev-mode.sh -d --build

cd app/
composer install
cd ..
docker compose down

sh ./bin/dev-mode.sh -d

docker exec -it docker-php-app-1 sh
symfony check:requirements
exit
cd app/

Start coding your Symfony App 😎
```

### COMMANDES UTILES 

```sh
docker compose up 'option' -d
```
 ### environnement local ⚠

- dev 🥴

```sh
 docker compose -f docker-compose.dev.yaml up --build -d
 docker compose -f docker-compose.dev.yaml up -d
```

- dev + xdebug 😀

```sh
 XDEBUG_MODE=debug docker compose -f docker-compose.dev.yaml up -d

 > ou via le fichier .env.dev

 docker compose -f docker-compose.dev.yaml --env-file .env.dev up --build -d
 docker compose -f docker-compose.dev.yaml --env-file .env.dev up -d
 docker compose -f docker-compose.dev.yaml down
```

- Commande dev mode avec l'héritage de fichiers

```sh

> sh ./bin/dev-mode.sh -d  
> sh ./bin/dev-mode.sh -d --build

> docker compose -f docker-compose.yaml -f docker-compose.dev.yaml --env-file .env.dev up --build -d

> docker compose -f docker-compose.yaml -f docker-compose.dev.yaml --env-file .env.dev up -d
```

- fin du service

```sh
 docker compose -f docker-compose.dev.yaml down
```


### Shell du container
```sh
 docker exec -it docker-php-app-1 sh
 ```

 ### Créer une nouvelle branche git 
 `git checkout -b nom de la branche  `


### Docker processus
`docker ps`

### Redis commandes
```sh
redis-cli
27.0.0.1:6379> keys *
127.0.0.1:6379> FLUSHALL
OK
 ```

 ### PHP Unit
```sh
cd app/
composer run-phpunit -filename-
 ```