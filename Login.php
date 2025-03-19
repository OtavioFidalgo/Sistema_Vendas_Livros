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

        public function imprimir():string 
        {
            return "<br>Digite seu Email: ".$this->email.
                     "<br>Digite a Senha: ".$this->senhas;
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
    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="css/estiloLivro.css" />
</head>
<body Id="Fundo">
    <div Id="topo">
        <br>
        <figure class="imgI">
            <h1 style="font-size: 80px;">Livraria Fidalgo</h1>
        </figure>
        <br>
        
    </div>
    <div id="ban">
        <img class="bnI" href="imagens/bannerL.png">
            
        <img class="bnI" src="imagens/bannerL.png">  
    </div>

            <form class="login">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" style="font-size: 25px;">E-mail</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" style="font-size: 25px;">Senha</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button class="Entrar" type="button">  Entrar  </button>
              </form>

            <button class="voltarS" type="button">  Voltar  </button>
    

  
</body>
</html>