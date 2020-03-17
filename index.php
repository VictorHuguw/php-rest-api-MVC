<?php

require 'flight/Flight.php';
require 'Controllers/AppController.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('/teste', function(){
    echo 'rota teste!'; 
});


Flight::route(
    'GET /api/dados',
    ['AppController', 'getDados']
);

Flight::route(
    'GET /dados/@id',
    ['AppController','GetDado']
);

Flight::route(
    'POST /api/send',
    ['AppController','save']
);

Flight::start();
