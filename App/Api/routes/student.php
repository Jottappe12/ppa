<?php 

namespace Api\routes;

use App\Http\Response;

$obRouter->get('/api', [
    'middlewares' => [
    //   'required-user-logout',
    ],
    function ($request) {
      return new Response(200, "Api :)");
    }
  ]);