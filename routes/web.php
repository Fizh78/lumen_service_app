<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello-lumen', function () {
    return "<h1>Lumen</h1><p>Hi good developer, thanks for using Lumen</p>";
});

$router->get('/hello-lumen/{name}', function ($name)  {
    return "<h1>Lumen</h1><p>Hi<b>". $name."</b>, thanks for using Lumen</p>";
});

$router->get('/mobile', ['middleware' => 'login', function() {
    return "<h1>Selamat</h1><p>Anda Berhasil Login</p>";
}]);

$router->get('latihan', 'UsersController@latihan');

$router->get('/welcome', function () {
    return "<h1>Selamat Datang.</h1><p>Mari belajar Lumen.</p>";
});

$router->get('/welcome/{name}', function ($name) {
    return "<h1>Selamat Datang $name</h1><p>Mari belajar Lumen.</p>";
});

$router->get('/hallo/{name}', function ($name) {
    return "<h1>Hallo!!  $name</h1><p>Apa Kabar?</p>";
});

$router->get('/start/{name}', function ($name) {
    return "<h1>Get Started  $name</h1><p>Mari Kita Mulai</p>";
});

$router->get('/selamat/{name}', function ($name) {
    return "<h1>Selamat $name</h1><p>Anda dapat motor</p>";
});

$router->get('/posts','PostsController@index');
$router->post('/posts','PostsController@store');
$router->get('/post/{id}', 'PostsController@show');
$router->put('/post/{id}', 'PostsController@update');
$router->delete('/post/{id}', 'PostsController@destroy');

$router->get('/User', 'UserController@index');