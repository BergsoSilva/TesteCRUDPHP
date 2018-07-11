<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lista de alunos da tabela alunos">
    <meta name="autor" content="bergsonSilva">

    <title>Lista de Alunos</title>
    <!-- boptstrp core CSS-->
    <link  href="/webApp/bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>
   
    <style type="text/css">
      .margin-button15 { margin-bottom: 15px; }
    </style> 

</head>
<body>
  <div class="container">
     <div class="row">
     <h1>Lista de Alunos </h1>

     <a href="produtos/add" class="btn btn-success margin-button15">Novo Aluno</a>

     <table class="table table-bordered">
            
            <thead>
                <tr>
                  <th class="text-center">Nome</th>
                  <th class="text-right">Data Nascimento</th>
                  <th class="text-center">Loguadouro</th>
                  <th class="text-center">Numero</th>
                  <th class="text-center">Bairro</th>
                  <th class="text-center">Cidade</th>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Data Criação</th>
                  <th class="text-center">Cep</th>
                  <th class="text-center">Curso</th>
                  
                </tr>
            </thead>

            <?php
                $contador = 0;
                foreach ($alunos as $aluno)
                {        
                    echo '<tr>';
                      echo '<td>'.$aluno->nome.'</td>'; 
                      echo '<td class="text-right">'.$aluno->data_nascimento.'</td>'; 
                      echo '<td class="text-right">'.$aluno->logradouro.'</td>';
                      echo '<td class="text-right">'.$aluno->numero.'</td>';
                      echo '<td class="text-right">'.$aluno->bairro.'</td>';
                      echo '<td class="text-right">'.$aluno->cidade.'</td>';
                      echo '<td class="text-right">'.$aluno->estado.'</td>';
                      echo '<td class="text-right">'.$aluno->data_criacao.'</td>';
                      echo '<td class="text-right">'.$aluno->cep.'</td>';
                      echo '<td class="text-right">'.$aluno->id_curso.'</td>';
                      echo '<td class="text-center">';
                        echo '<a href="/produtos/editar/'.$aluno->id_aluno.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                        echo ' <a href="/produtos/apagar/'.$aluno->id_aluno.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                        echo ' <a href="/produtos/detalhes/'.$aluno->id_aluno.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';
                      echo '</td>'; 
                    echo '</tr>';
                $contador++;
                }
            ?>

        </table>
     </div>
  </div> <!-- container-->


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/webApp/bootstrap/js/bootstrap.min.js"></script>   
    
</body>
</html>