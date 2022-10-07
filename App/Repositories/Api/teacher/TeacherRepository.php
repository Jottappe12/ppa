<?php

namespace App\Repositories\Api\teacher;

use App\Database\Database;

class TeacherRepository
{
  //Condição para buscar as informações de todos os alunos ativos
  public static function whereAllStudents()
  {
    $where = " u.ATIVO = 1";

    return $where;
  }

  //Condição para buscar as informações de aluno especifico
  public static function whereOneStudent($id_aluno)
  {
    $where = " a.ID = ${id_aluno}";

    return $where;
  }

  /**
   * Método responsável por buscar os alunos
   */
  public static function findStudents($where)
  {
    //QUERY
    $query = self::getQuery($where);

    //Cria o PDO de sql que busca os alunos
    $results = (new Database)->execute($query);

    //Transforma a variável em object e o insere no array
    while ($obStudent = $results->fetchObject()) {

      $itens[] = $obStudent;
    }

    //RETORNA OS ITENS
    return $itens;
  }

  /**
   * Método responsável por criar a query que busca um aluno
   */
  public static function getQuery($where)
  {
    return "SELECT DISTINCT *
            FROM ALUNO a
            WHERE ${where} 
            ";
  }
}
