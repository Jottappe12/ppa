<?php

namespace App\Controller\Pages\Admin;

use App\Utils\View;

class Page
{
  /**
   * Método responsável por renderizar o cabeçalho da página
   * @return string 
   */
  private static function getHeader()
  {
    return View::render('templates/header');
  }

  /**
   * Método responsável por renderizar o rodapé da página
   * @return string
   */
  private static function getFooter()
  {
    return View::render('templates/footer');
  }

  /**
   * Método responsável por renderizar o conteúdo (view)
   * @return string
   */
  public static function getPage($title, $content)
  {
    return View::render('pages/Page', [
      'title'   => $title,
      'header'  => self::getHeader(),
      'content' => $content,
      'footer'  => self::getFooter()
    ]);
  }
}
