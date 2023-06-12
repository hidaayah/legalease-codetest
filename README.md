<h1>Legalease Code Test</h1>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## The Task

We’d like you to build a simple REST API that can be run locally. It will supply a ‘firm ranking’ list which can be consumed by a third party application.

In its simplest form we’d like you to create a GET request endpoint which serves up the data as JSON - you may use any language and framework of your choice. We would like to see the endpoint take the parameter regionId and return an error if the value is not equal to 170.


## The Chosen Language

For this task, I have chosen to use the Laravel Framework. This is for multiple reasons:

1. Since Legalease is currently on the WordPress platform and WordPress being a PHP language, I wanted to utilise something to show my ability in PHP;
2. Laravel is accessible, powerful and is great for building API's very quickly with built in helpers that take care of the areas you do not necessarily need to worry about (Routing for example);
3. Laravel is something that is easy to build upon and allows you to build a really robust platform adding things like security from within the framework;

## Some Assumptions

In this task, I have made some assumptions:

- The task was to return the list found in the file without any reformatting of any way. If there was a requirement to reformat the JSON file, I would have either used a library, or created a transformer method in the controller with the desired output. For this, we would need the required format including which nodes were required and which ones were optional;
- I have made the assumption that the requirement of `regionId` has to be `170` as a non changing requirement for the future and so have used it as a direct requirement in the code (I have written below how I would extend this);

## If I had more time
- Unfortunately, due to time constraints, I was not able to get to the part of securing the system, however, if I was to do this, I would use Sanctum to enforce the creating of tokens to authenticate the API requests;
- Again, if I had the time, I would have created tests to make sure that we return JSON valid in the response;
- The way this has been built is to get to a MVP quickly so that we can iterate over it. With this in mind, I have used the requirement as anything not with `regionId` as `170` to return an error. If within the discussion of requirements, however, hinted towards there being more `regionId`'s in the future, I would have either created a basic array that contained the ID of the ID's to avoid or I would have created a database table to be able to manage the list easier without any code change;

## Usage

| Endpoint | Method | Parameters | Response
| ----------- | ----------- | ----------- | ----------- |
| /api/list/{RegionId} | GET | int RegionId | JSON response. Error: {"status":"error","data":{"message":"Region ID not supported"}} |

To test this piece of code, you need to install [Laravel](https://laravel.com/) with minimum [PHP 8.1](https://www.php.net/downloads.php). After running the composer installs, you will need to run `php artisan serve` which will create a local server on your machine.

Then, in Postman, you will need to create a new `GET` request with the Request URL: http://127.0.0.1:8000/api/list/170. Depending on your setup, you may get a different IP address.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
