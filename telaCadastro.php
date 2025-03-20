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
                <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Sobrenome</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="sobrenome">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">E-mail</label>
                <input type="text" class="form-control" id="exampleInputText" name="email">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Data de Nasciment</label>
                <input type="text" class="form-control" id="exampleInputText" name="dataNascimento">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Telefone</label>
                <input type="text" class="form-control" id="exampleInputText" name="tele">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Endereço</label>
                <input type="text" class="form-control" id="exampleInputText" name="endereco">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Senha</label>
                <input type="text" class="form-control" id="exampleInputText" name="senha">
              </div>
              
              <button class="botaoL">  Cadastrar  
                <?php

                  if(isset($_POST['nome']) && isset($_POST['sobrenome']) && isset($_POST['email']) && isset($_POST['dataNascimento']) && isset($_POST['tele']) && isset($_POST['endereco']) && isset($_POST['senha'])){
                    try{
                      $nome = $_POST['nome'];
                      $sobrenome = $_POST['sobrenome'];
                      $email = $_POST['email'];
                      $dataNascimento = $_POST['dataNascimento'];
                      $tele = $_POST['tele'];
                      $endereco = $_POST['endereco'];
                      $senha = $_POST['senha'];
                    }catch(Exception $erro){
                      echo "Algo deu errado ".$erro;
                    }
                    $cadastrar->cadastro($conexao, $nome, $sobrenome, $email, $dataNascimento, $tele, $endereco, $senha);

                  }
                ?>
              <a href="telaCadastro.php"></button>
              <button class="botaoL"><a href="Inicio.php">  Voltar  </button>
            </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>

        