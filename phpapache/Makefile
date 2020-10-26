NAME ?= zigoprofesia/phpapache
TAG	?= $$(git log -1 --pretty=%h)
IMG	:= ${NAME}:${TAG}
LATEST := ${NAME}:latest

build:
	@echo "Building image ${IMG}"
	@docker build -t ${IMG} .
	@docker tag ${IMG} ${LATEST}

rundev:
	@echo "docker run -v "$$PWD":/var/www/html/ -p 8088:80 ${LATEST}"
	@docker run -v "$$PWD":/var/www/html/ -p 8088:80 ${LATEST}

push:
	@docker push ${IMG} ${LATEST}

login:
	@docker login -u ${DOCKER_USER} -p ${DOCKER_PASS}