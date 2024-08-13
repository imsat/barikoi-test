# Test project for BariKoi

This project combines Laravel as the backend framework with Reverb for websocket server. Follow the instructions below to set up and run the project.

## Prerequisites

- [PHP](https://www.php.net/) (>= 8.2)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) (>= 18.x)
- [npm](https://www.npmjs.com/) (comes with Node.js)
- [MySQL](https://www.mysql.com/) or another database of your choice
- [Redis](https://redis.io/) for QUEUE driver

## Getting Start

1. **Clone the repository:**

   ```bash
   https://github.com/imsat/barikoi-test.git

2. **Install Laravel dependencies:**

    ```bash
   composer install

3. **Install Laravel dependencies:**

    ```bash
    cp .env.example .env

4. **Update the database configuration in the .env file:**
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=your_database_host
    DB_PORT=your_database_port
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password

5. **Generate the application key:**
    ```bash
   php artisan key:generate

6. **Generate the JWT secret:**
    ```bash
    php artisan jwt:secret

7. **Run database migrations and seed data:**
    ```bash
    php artisan migrate --seed

8. **Update your Redis configuration in the .env file:**
    ```bash
    REDIS_CLIENT=phpredis
    REDIS_HOST=127.0.0.1
    REDIS_PASSWORD=null
    REDIS_PORT=6379

9. **Update your Laravel Reverb configuration in the .env file:**
    ```bash
    REVERB_APP_ID=634432
    REVERB_APP_KEY=fgqyraal4g6fdjoszbwi
    REVERB_APP_SECRET=eu8udabmbg4turcywt0g
    REVERB_HOST="localhost"
    REVERB_PORT=8080
    REVERB_SCHEME=http

9. **Run this command for start websocket server:**
    ```bash
    php artisan reverb:start

10. **Run this command for queue process:**
    ```bash
    php artisan queue:work
    
## Running the Application

11. **Run the Laravel development server:**
    ```bash
    php artisan serve

12. **Access the application in your browser:**

Open your browser and navigate to http://127.0.0.1:8000 or desired port show in your terminal.


   
   
    
