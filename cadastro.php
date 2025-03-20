<?php
  namespace PHP\Modelo;
  require_once('conexao.php');
  use PHP\Modelo\Conexao;

  $conexao = new Conexao();

  class Cadastro{
        private int $codigo;
        private string $nome;
        private string $sobrenome;
        private string $email;
        private string $dataNascimento;
        private string $tele;
        private string $endereco;
        private string $senha;

      public function cadastro(int $codigo, string $nome, string $sobrenome, string $email, string $dataNascimento, string $tele, string $endereco, string $senha)
      {
        try{
          $conn = $conexao->conectar();
          $sql = "insert into cadastrar (nome, sobrenome, email, dataNascimento, tele, endereco, senha) value ('$nome', '$sobrenome', '$email', '$dataNascimento', '$tele', '$endereco', '$senha')";
          $result = mysqli_query($conn, $sql);
          mysqli_close($conn);
          if($result){
            return "<br>Cadastrado com Sucesso!";
          }
          return "<br>ERRO";
        }catch(Exception $erro){
          return "<br><br> Erro Fatal"
        }
        
        
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
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
        <form class="login">
              <div class="login">
                <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Sobrenome</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">E-mail</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Data de Nasciment</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Telefone</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Endereço</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Senha</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
              </div>
              
              <button class="botaoL">  Cadastrar  
                <?php
                  $cadastrar->cadastro($conexao, $nome, $sobrenome, $email, $dataNascimento, $tele, $endereco, $senha);
                ?>
              </button>
              <button class="botaoL"><a href="Inicio.php">  Voltar  </button>
            </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>

        