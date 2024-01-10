DOCKER_PREFIX = docker-compose exec web-server

PHP_CMD = docker-compose exec web-server php
COMPOSER_CMD = docker-compose exec web-server composer
NPM_CMD = $(DOCKER_PREFIX) npm
#COMPOSER_CMD = compose
#PHP_CMD = php
.DEFAULT_GOAL:=help
rebuild:
	-$(COMPOSER_CMD) install

	-$(NPM_CMD) install
	-$(NPM_CMD) run dev

	@ echo "Esborrant la base de dades..."
	-$(PHP_CMD) bin/console doctrine:database:drop -n --force

	@ echo "Creant-la de nous..."
	$(PHP_CMD) bin/console doctrine:database:create -n

	@ echo "Creant l'estructura..."
	$(PHP_CMD) bin/console doctrine:schema:create -n


	@ echo "Carregant les dades..."
	$(PHP_CMD) bin/console doctrine:fixtures:load -n

help:
	@ echo "Utilitza 'make rebuild' per a regenerar les dades"