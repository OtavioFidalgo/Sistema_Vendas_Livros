<?php
    namespace PHP\Modelo;

    class Reserva{
        protected string $reserva;

        public function __construct(string $reserva)
        {
            $this ->reserva = $reserva;
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
            return "<br>Reserva: ".$this->reserva;
        }

    }

?>