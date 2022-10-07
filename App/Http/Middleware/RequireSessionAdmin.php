<?php

namespace App\Http\Middleware;

class RequireSessionAdmin
{
  /**
   * Método responsável por executar o middleware
   * @param  Request $request
   * @param  Closure next
   * @return Response
   */
  public function handle($request, $next)
  { 
    //VALIDA SE O USUÁRIO É UM ADMINISTRADOR  
    if ($request->user->PERMISSAO == 'admin') {

      return $next($request);
    } else {
      echo 'URL não encontrada';
    }
  }
}
