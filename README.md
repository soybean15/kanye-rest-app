# Project Name
## Kanye Rest

## Overview

This project is a Laravel-based application that uses Docker and Laravel Sail for local development.

## Requirements

- PHP 8.0 or higher
- Composer
- Docker
- Docker Compose

### Steps to Install Laravel

Follow these steps to get the Laravel application running locally:

---

### 1. Clone the Repository

Clone the repository from GitHub to your local machine:

```bash
git clone https://github.com/soybean15/kanye-rest-app.git
cd kanye-rest-app
```

### 2. Install PHP Dependencies

Clone the repository from GitHub to your local machine:

```bash
composer install

```

### 3. Set Up the Environment

Make a copy of the ``.env.example`` file and rename it to ``.env``. This file will store your environment-specific configuration, including the database and application settings.

```bash
cp .env.example .env


```
### 4. Generate the Application Key

Laravel requires an application key for encryption and security. Generate this key by running the following command:
```bash
php artisan key:generate

```
### 5. Install Frontend Dependencies

Laravel uses NPM to manage frontend dependencies. Install the required packages by running:
```bash
npm install

```
### 6. Build Docker Containers

Build the Docker containers for Sail:
```bash
./vendor/bin/sail up -d

```
### 7. Run Migrations
Run the database migrations:
```bash
./vendor/bin/sail artisan migrate

```
### 8: Access the Application

The application should now be running locally. By default, Sail uses port `80`, but if you've specified a different port in your `docker-compose.yml` file, make sure to use that one.

You can access the application in your browser by navigating to:
```bash
http://localhost

```
**Reminder**: If you're using a different port, replace `http://localhost` with `http://localhost:<your-port-number>` (e.g., `http://localhost:8080` if you configured port `8080`).


## Testing

You can run tests within the Sail environment using either Artisan or the direct `sail test` command.

- Using Artisan to run tests:
  ```bash
  ./vendor/bin/sail artisan test
  ```

## Troubleshooting

If you encounter any issues with Docker, try restarting the containers:

```bash
docker-compose down
docker-compose up -d
```

