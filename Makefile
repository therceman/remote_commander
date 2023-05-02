SHELL := /bin/bash

# silent all commands
ifndef VERBOSE
.SILENT:
endif

# extract all config from .env file
-include .env
export $(shell if test -f ".env"; then (sed 's/=.*//' .env) fi;)

CONTAINER_NAME=remote_commander

run:
	docker compose up -d --build
	$(eval HOSTNAME=$(shell hostname -I | awk '{print $$1}'))
	echo "[${CONTAINER_NAME}] ===> Running PHP at http://${HOSTNAME}:${PHP_PORT}"