<?php
    namespace PHP\Modelo;

    class Livro{
        protected string $nomeLivro;
        protected string $categoria;
        protected string $codigo;
        protected string $preco;
        protected string $titulo;

        public function __construct(string $nomeLivro, string $categoria, string $codigo, string $preco)
        {
            $this ->titulo = "Coraline";
            $this ->nomeLivro = $nomeLivro;
            $this ->categoria = $categoria;
            $this ->codigo = $codigo;
            $this ->preco = $preco;

        }

        public function __get(string $dados):mixed
        {
            return $this->dados;
        }

        public function __set(string $variavel, string $dados):void 
        {
            $this->variavel = $dados;
        }

        public function verificarLivro(string $nomeLivro):string{
            if($this->nomeLivro = $titulo){
                return "Disponivel";
            }else{
                return "Reservar";
            }
        }

        public function imprimir():string 
        {
            return "<br>Nome do Livro: ".$this->nomeLivro. 
                   "<br>Categoria: ".$this->categoria. 
                   "<br>Código do Livro: ".$this->codigo.  
                   "<br>Preço: ".$this->preco;
        }

    }

?>