# PHP CODING CHALLENGE API

### Setup

These are the procedures to follow when setting up the app for the first time using sail with docker

-   Install composer dependencies
    ```
    docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php81-composer:latest composer install --ignore-platform-reqs
    ```
-   Copy the .env.example to .env
    ```
    cp .env.example .env
    ```
-   Build the project **(keep this running in a tab in order to get access to the sail command)**
    ```
    vendor/bin/sail up
    ```
-   Generate the application key
    ```
    vendor/bin/sail artisan key:generate
    ```
-   Run migrations
    ```
    vendor/bin/sail artisan migrate:fresh
    ```

### Start project

These are the commands to run when starting project

-   Start the php and mysql servers
    ```
    vendor/bin/sail up
    ```


### setup 2 

These are the procedures to follow when setting up the app for the first time using php and mysql

-   Install composer dependencies
    ```
   installing composer dependencies and php 8.1 
    ```

-   Copy the .env.example to .env
    ```
    cp .env.example .env
    ```
-   Build the project **(keep this running in a tab in order to get access to the composer command)**
    ```
    php artisan serve
    ```
-   Generate the application key
    ```
    php artisan key:generate
    ```
-   Run migrations
    ```
    php artisan migrate:fresh
    ```

### Start project

These are the commands to run when starting project

-   Start the php and mysql servers
    ```
    php artisan serve
    ```