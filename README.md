# 🎉 DEMO Laravel Breeze TDD

Test-Driven Development (TDD) is a software development approach where tests are written before writing the corresponding code. It involves a repetitive cycle of writing a test, ensuring it fails, writing the minimum code to pass the test, and then refactoring the code while keeping all tests green.

![version](https://img.shields.io/badge/version-1.0-blue)
![rating](https://img.shields.io/badge/rating-★★★★★-yellow)
![uptime](https://img.shields.io/badge/uptime-100%25-brightgreen)

### 🚀 Setup

- Create Project

```shell
composer create-project laravel/laravel example-app
```

- Install Package

```shell
composer require laravel/breeze --dev
```

- Configure Environment

```shell
cp .env.example .env
```

- Migrate

```
php artisan breeze:install
 
php artisan migrate
npm install
npm run dev
```

- Generate Mailable

```
php artisan make:mail WelcomeEmail --markdown=emails.welcome
php artisan make:controller SendmailController
```

- Configure Email

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=email@example.com
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

- Custom Component

```
php artisan vendor:publish --tag=laravel-mail
```

- Install PHPUnit

```
composer require --dev phpunit/phpunit
```

- Create Test for Mailable

```
php artisan make:test SendmailTest
```

- Run Test

```
php artisan test
```

### 🏆 Run

- [http://localhost:8000/](http://localhost:8000/) username : `admin` password : `admin`

```shell
php artisan serve
```
