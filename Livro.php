<?php
    namespace PHP\Modelo;

    class Livro{
        protected string $nomeLivro;
        protected string $categoria;
        protected string $codigo;
        protected string $preco;

        public function __construct(string $nomeLivro, string $categoria, string $codigo, string $preco)
        {
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

        public function imprimir():string 
        {
            return "<br>Nome do Livro: ".$this->nomeLivro. 
                   "<br>Categoria: ".$this->categoria. 
                   "<br>Código do Livro: ".$this->codigo.  
                   "<br>Preço: ".$this->preco;
        }

    }

?>