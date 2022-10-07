<?php

use App\Http\Response;


$obRouter->get('/api', [
  'middlewares' => [
    'api',
    // 'user-basic-auth'
  ],
  function ($request) {
    return new Response(200, 'API :)', 'application/json');
  }
]);
