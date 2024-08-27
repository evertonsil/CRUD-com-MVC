<?php

use core\Router;

$router = new Router();

//rotas para páginas (get)
$router->get('/', 'HomeController@index');
$router->get('/add', 'UsersController@add');
$router->get('/user/edit/{id}', 'UsersController@edit');
$router->get('/user/delete/{id}', 'UsersController@delete');

//rotas para processamento
$router->post('/add', 'UsersController@addUser');
$router->post('/user/edit/{id}', 'UsersController@editUser');
// $router->post('/delete', 'UsersController@deleteUser');
