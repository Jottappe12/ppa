<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Home extends Page
{
  /**
   * Método responsável por renderizar a home
   */
  public static function getHome()
  {
    $content = View::render('/pages/Admin/home',[
      'itens' => 'Admin'
    ]);
    
    return parent::getPage('Home', $content);
  }
}
