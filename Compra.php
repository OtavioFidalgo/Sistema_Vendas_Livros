<?php
    namespace PHP\Modelo;
    require_once('Livro.php');
    require_once('Cliente.php');
    use PHP\Modelo\Livro;
    use PHP\Modelo\Cliente;

    class Compra{
        private Livro $valorCompra;
        private Cliente $infor;
        private string $dataCompra;
        private string $numCartao;

        public function __construct(Livro $valorCompra, Cliente $infor, string $dataCompra, string $numCartao)
        {
            $this ->valorCompra = $valorCompra;
            $this ->infor = $infor;
            $this ->dataCompra = $dataCompra;
            $this ->numCartao = $numCartao;
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
            return "<br>Valor final da Compra: ".$this->valorCompra->imprimir(). 
                    "<br>Informações do Cliente: ".$this->infor->imprimir().
                    "<br>Data da Compra: ".$this->dataCompra.
                   "<br>Número do Cartão: ".$this->numCartao;
        }

    }

?>