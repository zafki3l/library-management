<?php

use App\Presentation\Http\Controller\HomeController;

$route->get('/', [HomeController::class, 'index']);

$route->get('/clickme', [HomeController::class, 'click']);

$route->post('/process', [HomeController::class, 'process']);