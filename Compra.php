<?php
    namespace PHP\Modelo;
    require_once('Livro.php');
    use PHP\Modelo\Livro;
    

    class Compra{
        private Livro $valorCompra;
        private string $dataCompra;
        private string $numCartao;

        public function __construct(Livro $valorCompra, string $dataCompra, string $numCartao)
        {
            $this ->valorCompra = $valorCompra;
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
                    "<br>Data da Compra: ".$this->dataCompra.
                   "<br>Número do Cartão: ".$this->numCartao;
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
    <title>Tela Compra</title>
    <link rel="stylesheet" type="text/css" href="css/estiloLivro.css" />
</head>
<body Id="Fundo">
    <div Id="topo">
        <br>
        <figure class="imgTC">
            <h1 class="marca" style="font-size: 80px;">Livraria Fidalgo</h1>
        </figure>
        <br>
        
    </div>
        <form class="nav">
            <div id="ban">
                <img class="bnC" href="imagens/bannerL.png">
                    <button class="home" type="button">  Home  </button>
                    <button class="livros" type="button">  Livros  </button>
                    <button class="compras" type="button">  Compras  </button>
                    <button class="sair" type="button">  Sair  </button>
                <img class="bnC" src="imagens/bannerL.png">  
                    
            </div>
        </form>
    <div id="titulo">
        <br><br>
        <h3>COMPRAS</h3>
        <br>
        <img class="liC" href="imagens/livro_1.png"><img class="liC" src="imagens/livro_1.png">
        

        
    </div>
    <div id="tLivrosTC">
        <titulo class="ti"><h5>O Paciente</h5></titulo>
        <titulo class="au"><h5>Jasper deWitt</h5></titulo>
        <titulo class="cat"><h5>Suspense</h5></titulo>
        <titulo class="preco"><h5>R$ 80,00</h5></titulo>
        <titulo class="che"><h5>Previsão de Chegada: 08/04/2025</h5></titulo>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <button class="Com" type="button">  Comprar  </button>
    </div>

    <div class="figureTC"><h3>Resumo</h3><br><p>Parker assume a responsabilidade de descobrir o que aflige 
                                                esse paciente misterioso, com o objetivo de o curar. 
                                                Mas as coisas fogem ao seu controlo desde o primeiro encontro. 
                                                E, diante de uma possibilidade inimaginável, Parker é forçado a 
                                                questionar tudo aquilo em que julgava acreditar.

    </p></figure></div>    
    <br>

    <div Id="topo">
        <br>
        <figure class="imgFC"></figure>
        <br>
        
    </div>

  
</body>
</html>