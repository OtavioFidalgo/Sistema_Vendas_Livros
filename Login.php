<?php
    namespace PHP\Modelo;

    class Entrar{
        protected string $email;
        protected string $senhas;

        public function __construct(string $email, string $senhas)
        {

            $this ->email = $email;
            $this ->senhas = $senhas;
        }

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void 
        {
            $this->variavel = $dados;
        }

        public function verificacaoLogin(string $email, string $senhas):string{
            if($this->email == $email && $this->senhas == $senhas){
                return "Seja Bem Vindo!";
            }else{
                return "Usuário Invalido";
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
    <title>entrar</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
        <form class="login">
              <div class="login">
                <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <div class="login">
                <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              
              <button class="botaoL"><a href="home.php">  Entrar  </button>
              <button class="botaoL"><a href="Inicio.php">  Voltar  </button>
            </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>

        