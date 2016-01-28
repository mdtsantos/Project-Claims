<?php

$this->router->get('/', 'HomeController@homepage');
$this->router->get('/hello', 'HomeController@index');
$this->router->get('/greet/{name}', 'HomeController@greet');
