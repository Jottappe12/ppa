<?php

namespace App\Http\Middleware;

class Maintenance
{
  /**
   * Método responsável por executar o middleware
   * @param Request $request
   * @param Closure $next
   * @return Response
   */
  public function handle($request, $next)
  {
    //VERIFICA O ESTADO DE MANUTENÇÃO DO MIDDLEWARE
    if (getenv('MAINTENANCE') == 'true') {
      throw new \Exception("Página em manutenção. Tente novamente mais tarde.", 200);
    }

    //EXECUTA O PRÓXIMO NÍVEL DO MIDDLEWARE
    return $next($request);
  }
}
