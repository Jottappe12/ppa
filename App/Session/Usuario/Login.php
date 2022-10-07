<?php

namespace App\Session\Usuario;

class Login
{
  /**
   * Método responsável por iniciar a sessão
   */
  private static function init()
  {
    //VERIFICA SE A SESSÃO NÃO ESTÁ ATIVA
    if (session_status() != PHP_SESSION_ACTIVE) {
      session_start();
    }
  }

  /**
   * Método responsável por criar o login do usuário
   * @param  Usuario $obUser
   * @return boolean
   */
  public static function login($obUser)
  {
    //INICIA A SESSÃO 
    self::init();

    //DEFINE A SESSÃO DO USUÁRIO
    $_SESSION['usuario'] = $obUser;

    //SUCESSO
    return true;
  }

  /**
   * Método responsável por verificarr se o usuário está logado
   * @return boolean
   */
  public static function isLogged()
  {
    //INICIA A SESSÃO 
    self::init();

    //RETORNA A VERIFICAÇÃO
    return isset($_SESSION['usuario']);
  }

  /**
   * Método responsável por executar o logout do usuário
   * @return boolean
   */
  public static function logout()
  {
    //INICIA A SESSÃO 
    self::init();

    //DESLOGA O USUÁRIO
    unset($_SESSION['usuario']);

    //SUCESSO
    return true;
  }
}
