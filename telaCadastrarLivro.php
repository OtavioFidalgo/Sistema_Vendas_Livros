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
    <title>cadastro livro</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
        <form class="login" method="POST">
              <div class="login">
                <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">Título do Livro</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titulo">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Categoria</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="categoria">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Preço</label>
                <input type="text" class="form-control" id="exampleInputText" name="preco">
              </div>
              
              <button class="botaoL">  Cadastrar Livro
                <?php

                  if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['preco'])){
                    try{
                      $titulo = $_POST['titulo'];
                      $categoria = $_POST['categoria'];
                      $preco = $_POST['preco'];
                    }catch(Exception $erro){
                      echo "Algo deu errado ".$erro;
                    }
                    $cadastrar->cadastroLivro($conexao, $titulo, $categoria, $preco);

                  }
                ?>
              </button>
              <button class="botaoL">  Voltar  </button>
            </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>

        