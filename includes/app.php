<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\Database;
use App\Utils\View;
use App\DotEnv\Environment;
use App\Http\Middleware\Queue as MiddlewareQueue;

//CARREGA VARIÁVEIS DE AMBIENTE
Environment::load(__DIR__ . '/../');

//DEFINE AS CONFIGURAÇÕES DE BANCO DE DADOS
Database::config(
  getenv('DB_HOST'),
  getenv('DB_NAME'),
  getenv('DB_USER'),
  getenv('DB_PASS'),
  getenv('DB_PORT')
);

//DEFINE A CONSTANTE DE URL 
define('URL', getenv('URL'));

//DEFINE O VALOR PADRÃO DAS VARIÁVEIS 
View::init([
  'URL' => URL
]);

//DEFINE O MAPEAMENTO DE MIDDLEWARES
MiddlewareQueue::setMap([
  'maintenance'            => \App\Http\Middleware\Maintenance::class,
  'required-user-logout'   => \App\Http\Middleware\RequireUserLogout::class,
  'required-user-login'    => \App\Http\Middleware\RequireUserLogin::class,
  'required-session-user'  => \App\Http\Middleware\RequireSessionUser::class,
  'required-session-admin' => \App\Http\Middleware\RequireSessionAdmin::class,
  'api'                    => \App\Http\Middleware\Api::class,
  'authenticateUser'       => \App\Http\Middleware\AuthenticateUser::class,
  'user-basic-auth'        => \App\Http\Middleware\UserBasicAuth::class,
]);

//DEFINE O MAPEAMENTO DE MIDDLEWARES PADRÕES (EXECUTADOS EM TODAS AS ROTAS)
MiddlewareQueue::setDefault([
  'authenticateUser',
  'maintenance'
]);
