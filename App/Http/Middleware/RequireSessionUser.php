<?php

namespace App\Http\Middleware;

class RequireSessionUser
{
  /**
   * Método responsável por executar o middleware
   * @param  Request $request
   * @param  Closure next
   * @return Response
   */
  public function handle($request, $next)
  {
    //VALIDA SE É UM USUÁRIO COMUM
    if ($request->user->PERMISSAO == 'usuario') {

      return $next($request);
    } else {
      echo 'URL não encontrada';
    }
  }
}
