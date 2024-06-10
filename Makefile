
DOCKER_COMPOSE = docker-compose
DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml


.PHONY: all build up down clean fclean re

all: build up

build:
	@mkdir -p /home/ael-amin/data/wordpress
	@mkdir -p /home/ael-amin/data/mariadb
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) build

up:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d

down:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down -v

clean: down
	@sudo rm -rf /home/ael-amin/data/mariadb/*
	@sudo rm -rf /home/ael-amin/data/wordpress/*

fclean: clean
	@sudo rm -rf /home/ael-amin/data/mariadb/*
	@sudo rm -rf /home/ael-amin/data/wordpress/*
	@docker system prune -a -f

re: clean all

