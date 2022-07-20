Інформація по командам

> docker ps --help
> docker run --help

Скачування образів

> docker pull node
> docker pull nginx


Перегляд

> docker images
> docker ps
> docker ps -a


Запуск НОВОГО контейнера

> docker run node
	запустить відпрацює і одразу вийде

> docker run -it node
	i запустить і перейде в інтерактивний режим (в консоль) Keep STDIN open even if not attached
	t Allocate a pseudo-TTY

> docker run -p 3000:80 [image]


Вихід з інтерактивного режему

> .exit


Видалення контейнера

> docker rm [hash]
> doker container prune


Видалення образу

> docker rmi [hash]
> doker images prune


Запуск ІСНУЮЧОГО контейнера

> docker start [hash]
> docker start [name_container]


Зупинка контейнера

> docker stop [hash]
> docker stop [name_container]


Створення образу на основі Dockerfile

>docker build .


Приклад створення образу

> cd project_dir
> echo "instruction for dockerfile" > Dockerfile
> docker build .

> docker images
> docker run -p 3000:80 [image_name]


Запуск контейнера із образу https://hub.docker.com/_/nginx

> docker run --name my-nginx -d -p 8080:80 nginx
> docker run nginx


Підключення до запущеного контейнеру

> docker run -d -p 3000:3000 [hash]
> docker ps
> docker attach [hash]


Логи контейнера

> docker logs [hash]


Вхід в докерхаб

>docker login


Заливка образу

> docker push esolo/my-node:latest


Перейменування docker тегу

> docker tag [tag_name] [new_tag_name]
> 


Том в контейнерах (папка для зберігання даних для роботи з різними контейнерами)

> docker run -d -p 80:3000 -v [volume_name]:/add/data --rm --name [name_container] [image_name:version]
> docker run -it -d -v datavolume:/var/www/data --rm --name mybusybox busybox:latest

> docker volume inspect datavolume


Run in windows nginx container

> docker run --rm -d -v %userprofile%\laravel:/usr/share/nginx/html -p 80:80 --name nginx nginx
> docker exec -it nginx /bin/bash


Run Alpine container
> docker run -it --rm --name alpine alpine /bin/sh


Інформація про контейнер

> docker container inspect [name]
> docker container inspect nginx


Збірка образу

> docker build . -t [name_image]:[tag]
> docker build . -t my-nginx:4.1.3
