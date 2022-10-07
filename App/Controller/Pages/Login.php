<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Login extends Page{
  /**
   * Método responsável por retornar a renderização da página de login
   * @param Request $request
   * @return string
   */
  public static function getLogin($request)
  {
    //CONTEÚDO DA PÁGINA DE LOGIN
    return view::render('/pages/login', [
      'usuario' => '',
      'senha'   => ''
    ]);
  }
}