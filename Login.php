<?php
    namespace PHP\Modelo;

    class Entrar{
        protected string $email;
        protected string $senhas;
        protected string $emailBD;
        protected string $senhasBD;

        public function __construct(string $email, string $senhas)
        {
            $this ->emailBD = "cleiton1@email.com";
            $this ->senhasBD = "15062006";
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
            if($this->email == $emailBD && $this->senhas == $senhasBD){
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