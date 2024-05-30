# Variables
DOCKER_COMPOSE = docker-compose
DOCKER_COMPOSE_FILE = ./srcs/docker-compose.yml

# Targets
.PHONY: all build up down clean re

all: build up

build:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) build

up:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) up -d

down:
	$(DOCKER_COMPOSE) -f $(DOCKER_COMPOSE_FILE) down -v

clean: down
# Ensure all containers are stopped and removed
	@sudo rm -rf /home/ael-amin/data/mariadb/*
	@sudo rm -rf /home/ael-amin/data/wordpress/*
# Remove specific volumes if necessary

re: clean all

#docker system df : status containers
#docker system prune -f : remove all containers
#docker rmi -f $(docker images -q) :remove all images
