<?php
    namespace PHP\Modelo;

    class Cliente{

        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $nascimento;
        protected string $login;
        protected string $senha;

        public function __construct(string $nome, string $endereco, string $telefone, string $nascimento, string $login, string $senha)
        {
            $this ->nome = $nome;
            $this ->endereco = $endereco;
            $this ->telefone = $telefone;
            $this ->nascimento = $nascimento;
            $this ->login = $login;
            $this ->senha =$senha;
        }

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void 
        {
            $this->variavel = $dados;
        }

        public function imprimir():string 
        {
            return "<br>Nome: ".$this->nome. 
                   "<br>Endereço: ".$this->endereco. 
                   "<br>Telefone: ".$this->telefone. 
                   "<br>Data de Nascimento: ".$this->nascimento. 
                   "<br>Login: ".$this->login. 
                   "<br>Senha: ".$this->senha;
        }
        
    }
?>