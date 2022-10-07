<?php

namespace App\Controller\Pages\Teacher;

use App\Utils\View;

class Home extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getHome()
  {
    $content = View::render('pages/Teacher/home',[
      'itens' => 'Professor'
    ]);

    return parent::getPage('Home', $content);
  }
}
