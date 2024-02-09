<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
## Quick Installation

    git clone git@github.com:SamuelGerges/todo-microserveice-admin.git
    cd SD_Project/
    
    when git clone this repositry you must clone this repoistry 
    git clone git@github.com:SamuelGerges/todo-microserveice-main-admin.git

### For Environment Variable Create

    cp .env.example .env

### rabbitmq
    create account free for RabbitMQ

### set variable in file env 
    DB_DATABASE=admin
    DB_USERNAME=root
    DB_PASSWORD=set your password

    QUEUE_CONNECTION=rabbitmq

    RABBITMQ_HOST=sparrow-01.rmq.cloudamqp.com
    RABBITMQ_PORT=5627
    RABBITMQ_USER=zcscwmwcn
    RABBITMQ_PASSWORD=dNWSRoRxCgfywwySKlgMBvad0HJWfOW-6X
    RABBITMQ_VHOST=zcscwmwcn
    RABBITMQ_QUEUE=admin_queue

### docker
    docker-compose up --build

### RUN Commands
    docker-compose exec admin sh
    php artisan migrate
    php artisan db:seed

### http.http
    you can run routes that existed in api.php
    
    example
    POST http://localhost:8000/api/products/14/like
    Accept: application/json
    Content-Type: application/json

### Usage Package
    RabbitMQ Queue driver
    barryvdh/laravel-ide-helper

### Usage Skills  in TODO Microservice
    docker
    Event Service Provider
    Queue && Jobs


### About TODO

    you can crud product and save in another db 
    User can add new Product in one more db by queue job. 
    user can update and delete product in one more db by queue job.
 
