<?php
  namespace PHP\Modelo;
  require_once('Conexao.php');
  require_once('cadastro.php');
  use PHP\Modelo\Conexao;
  use PHP\Modelo\Cadastro;

  $conexao = new Conexao();
  $cadastrar = new Cadastro();
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
        <form class="login" method="POST">
              <div class="login">
                <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">Digite um Código para consultar o Livro</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <button class="botaoL">  Consultar  
                <?php

                  if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['preco'])){
                    try{
                      $nome = $_POST['titulo'];
                      $sobrenome = $_POST['categoria'];
                      $email = $_POST['preco'];
                    }catch(Exception $erro){
                      echo "Algo deu errado ".$erro;
                    }
                    $consultar->consultarLivro($conexao, $titulo, $categoria, $preco);

                  }
                ?>
              
              <button class="botaoL"><a href="telaAdmin.php">  Voltar  </button>
            </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>