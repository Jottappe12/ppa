<?php

require __DIR__ . '/includes/app.php';

use App\Http\Router;

//INICIA O ROUTER
$obRouter = new Router(URL);


//INCLUI AS ROTAS DA API
include __DIR__ . '/routes/Api/api.php';

//INCLUI AS ROTAS DAS PÁGINAS DE ADMIN
include __DIR__ . '/routes/Admin/admin.php';

//INCLUI AS ROTAS DAS PÁGINAS DE PROFESSOR
include __DIR__ . '/routes/Teacher/teacher.php';

//INCLUI AS ROTAS DAS PÁGINAS DE ALUNO
include __DIR__ . '/routes/Student/student.php';


// IMPRIME O RESPONSE DA ROTA
$obRouter->run()
         ->sendResponse();
