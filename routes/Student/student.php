<?php

use App\Controller\Pages\Student\Home;
use App\Http\Response;

$obRouter->get('/aluno', [
  'middlewares' => [
    'required-user-logout',
  ],
  function ($request) {
    return new Response(200, Home::getHome());
  }
]);