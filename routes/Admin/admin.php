<?php

use App\Controller\Pages\Admin\Home;
use App\Controller\Pages\Login;
use App\Http\Response;

$obRouter->get('/', [
  function ($request) {
    return new Response(200, Login::getLogin($request));
  }
]);

$obRouter->get('/admin', [
  'middlewares' => [
    'required-user-logout',
  ],
  function ($request) {
    return new Response(200, Home::getHome());
  }
]);