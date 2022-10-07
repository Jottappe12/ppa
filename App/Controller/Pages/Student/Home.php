<?php

namespace App\Controller\Pages\Student;

use App\Utils\View;

class Home extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getHome()
  {
    $content = View::render('pages/Student/home',[
      'itens' => 'Aluno'
    ]);

    return parent::getPage('Home', $content);
  }
}
