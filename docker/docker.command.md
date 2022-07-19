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
	запустить і перейде в інтерактивний режим (в консоль)

> docker run -p 3000:80 [hash]


Вихід з інтерактивного режему

> .exit


Видалення контейнера

> docker rm [hash]
> doker container prune


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
> docker run -p 3000:80 [hash|name_container]