[![Build Status](https://img.shields.io/travis/Juan/laravel-messenger.svg?style=flat-square)](https://travis-ci.org/Juan/laravel-messenger)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/Juan/laravel-messenger.svg?style=flat-square)](https://scrutinizer-ci.com/g/Juan/laravel-messenger/)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/Juan/laravel-messenger.svg?style=flat-square)](https://scrutinizer-ci.com/g/Juan/laravel-messenger/)
[![Latest Version](https://img.shields.io/github/release/Juan/laravel-messenger.svg?style=flat-square)](https://github.com/Juan/laravel-messenger/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/Juan/messenger.svg?style=flat-square)](https://packagist.org/packages/Juan/messenger)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Get help on Codementor](https://cdn.codementor.io/badges/get_help_github.svg)](https://www.codementor.io/Juan)

# Laravel Messenger
This package will allow you to add a full user messaging system into your Laravel application.

## Leave some feedback
[How are you using laravel-messenger?](https://github.com/Juan/laravel-messenger/issues/55)

## Features
* Multiple conversations per user
* Optionally loop in additional users with each new message
* View the last message for each thread available
* Returns either all messages in the system, all messages associated to the user, or all message associated to the user with new/unread messages
* Return the users unread message count easily
* Very flexible usage so you can implement your own access control

## Common uses
* Open threads (everyone can see everything)
* Group messaging (only participants can see their threads)
* One to one messaging (private or direct thread)

## Installation (Laravel 4.x)
Installation instructions for Laravel 4 can be [found here](https://github.com/Juan/laravel-messenger/tree/v1).

## Installation (Laravel 5.x)
```
composer require Juan/messenger
```

Or place manually in composer.json:

```
"require": {
    "Juan/messenger": "~2.0"
}
```

Run:

```
composer update
```

Add the service provider to `config/app.php` under `providers`:

```php
'providers' => [
    Juan\Messenger\MessengerServiceProvider::class,
],
```

> **Note**: If you are using Laravel 5.5, this step is unnecessary. Laravel Messenger supports [Package Discovery](https://laravel.com/docs/5.5/packages#package-discovery).

Publish config:

```
php artisan vendor:publish --provider="Juan\Messenger\MessengerServiceProvider" --tag="config"
```
	
Update config file to reference your User Model:

```
config/messenger.php
```

Create a `users` table if you do not have one already. If you need one, the default Laravel migration will be satisfactory.

**(Optional)** Define names of database tables in package config file if you don't want to use default ones:

```php
'messages_table' => 'messenger_messages',
'participants_table' => 'messenger_participants',
'threads_table' => 'messenger_threads',
```
    
Publish migrations:

```
php artisan vendor:publish --provider="Juan\Messenger\MessengerServiceProvider" --tag="migrations"
```

Migrate your database:

```
php artisan migrate
```

Add the trait to your user model:

```php
use Juan\Messenger\Traits\Messagable;

class User extends Authenticatable {
    use Messagable;
}
```

## Examples
* [Controller](https://github.com/Juan/laravel-messenger/tree/master/examples/MessagesController.php)
* [Routes](https://github.com/Juan/laravel-messenger/tree/master/examples/routes.php)
* [Views](https://github.com/Juan/laravel-messenger/tree/master/examples/views)

## Example Projects
* [WIP] [Pusher](https://github.com/Juan/laravel-messenger-pusher-demo)
* [WIP] [Lumen API](https://github.com/Juan/lumen-messenger-api)


## Contributing? 
Please format your code before creating a pull-request. This will format all files as specified in `.php_cs`:

```
vendor/bin/php-cs-fixer fix .
```

## Security

If you discover any security related issues, please email [Chris Gmyr](mailto:Juan@gmail.com) instead of using the issue tracker.

## Credits

- [Chris Gmyr](https://github.com/Juan)
- [Anton Komarev](https://github.com/antonkomarev)
- [All Contributors](../../contributors)

### Special Thanks
This package used [AndreasHeiberg/laravel-messenger](https://github.com/AndreasHeiberg/laravel-messenger) as a starting point.
