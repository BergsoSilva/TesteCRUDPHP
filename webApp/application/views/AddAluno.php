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
    <link  href="bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>

</head>
<body>
  <div class="container">
     <div class="row">
     <title>Novo cadastro</title>

<!-- Bootstrap core CSS -->
<link href="/webApp/bootstrap/css/bootstrap.min.css" rel="stylesheet">    

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->       
</head>

<body>    

<div class="container">

  <div class="row">
            
    <h1>Novo Aluno</h1>   
    <ol class="breadcrumb">
          <li><a href="/">Inicio</a></li>          
          <li class="active">Novo Aluno</li>
    </ol>      

    <!-- Formulário de novo cadastro  -->
    <form action="/alunos/salvar" name="form_add" method="post">
      
        <div class="row">
            <div class="col-md-8">
                 <label>Nome</label>
                <input type="text" name="nome" value="" class="form-control">
            </div>
        </div> 

        <div class="row">
            <div class="col-md-8">
                <label>Data Nascimento </label>
                 <input type="text" name="preco" value="" class="form-control">
             </div>
         </div>
       
       
       <div class="row">
            <div class="col-md-8">
                <label>Logradouro</label>
                <input type="text" name="logradouro" value="" class="form-control">
             </div>
         </div>


        <div class="row">
            <div class="col-md-8">
                <label>Número</label>
                 <input type="text" name="numero" value="" class="form-control">
            </div>
        </div>

       <div class="row">
            <div class="col-md-8">
                <label>Bairro</label>
                <input type="text" name="bairro" value="" class="form-control">
            </div>
         </div>

       <div class="row">
            <div class="col-md-8">
                <label>Cidade</label>
                <input type="text" name="cidade" value="" class="form-control">
            </div>
        </div>

        
       <div class="row">
             <div class="col-md-8">
                 <label>Estado</label>
                 <input type="text" name="estado" value="" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label>Data da Criação </label>
                <input type="text" name="data_criacao" value="" class="form-control">
            </div>
        </div>

       <div class="row">
            <div class="col-md-8">
                <label>Codigo Postal </label>
                <input type="text" name="cep" value="" class="form-control">
        </div>
       </div>

        <div class="row">
            <div class="col-md-8">
                <label>Curso </label>
                <input type="text" name="curso" value="" class="form-control">
            </div>
        </div>




      <!-- Button submit(enviar) formulário -->
      <br />
      <div class="row">
        <div class="col-md-2">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div><!-- fim do button submit(enviar) formulário -->
      

    </form><!--Fim formulário de novo cadastro  -->
     </div>
  </div> <!-- container-->


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/webApp/bootstrap/js/bootstrap.min.js"></script>   
    
</body>
</html>