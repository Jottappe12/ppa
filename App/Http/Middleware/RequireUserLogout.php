<?php

namespace App\Http\Middleware;

use App\Session\Usuario\Login as SessionUserLogin;

class RequireUserLogout
{
  /**
   * Método responsável por executar o middleware
   * @param Request $request
   * @param Closure $next
   * @return Response
   */
  public function handle($request, $next)
  {
    //INFORMAÇÕES DO USUÁRIO LOGADO
    $user = $request->user;

    //VERIFICA SE O USUÁRIO ESTÁ LOGADO
    if (SessionUserLogin::isLogged()) {
      $request->getRouter()->redirect('/' . $user->PERMISSAO);
    }

    //CONTINUA A EXECUÇÃO
    return $next($request);
  }
}
