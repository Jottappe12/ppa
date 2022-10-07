<?php

use App\Controller\Pages\Teacher\Home;
use App\Http\Response;

$obRouter->get('/professor', [
  'middlewares' => [
    'required-user-logout',
  ],
  function ($request) {
    return new Response(200, Home::getHome());
  }
]);
