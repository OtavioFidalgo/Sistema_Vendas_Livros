<?php
    namespace PHP\Modelo;

    class Livros{
        private int $codigo;
        private string $titulo;
        private string $categoria;
        private int $preco;
  
        public function __construct(int $codigo, string $titulo, string $categoria, int $preco)
        {
          $this ->titulo = $titulo;
          $this ->categoria = $categoria;
          $this ->preco = $senha;
          
        }
  
        public function __get(string $dado):mixed 
        {
            return $this->dado;
        }
  
        public function __set(string $variavel, string $dado):void 
        {
            $this->variavel = $dado;
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
    <title>Livros</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="menu">
        <button class="botao" ><a href="home.php">Home</button>
        <button class="botao"><a href="Livros.php">Livros</button>
        <button class="botao"><a href="Compras.php">Compras</button>
        <button class="botao"><a href="Login.php">Sair</button>
    </div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
            <h3>Estante de Livros</h3>
            <div class="title-box">
                <img src="imagens/livro_1.png" alt="Livro 1">
                O Paciente<br>R$ 80,00
                <button class="botao" >Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_2.png" alt="Livro 2">
                Harry Potter<br>R$ 90,00
                <button class="botao" ><a href="Pagamento.php">Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_3.png" alt="Livro 3">
                Coraline<br>R$ 100,00
                <button class="botao" ><a href="Pagamento.php">Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_4.png" alt="Livro 4">
                O Pequeno Principe<br>R$ 50,00
                <button class="botao" ><a href="Pagamento.php">Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_5.png" alt="Livro 5">
                Memórias Postumas<br>R$ 70,00
                <button class="botao" >Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_6.png" alt="Livro 6">
                O Homem de Giz<br>R$ 120,00
                <button class="botao" >Comprar</button>
            </div>
        </div>
        <div class="news">
            <h3>Categoria</h3>
            <p> -> Ação <br>
                -> Literatura <br>
                -> Terror <br>
                -> Suspense <br>
            </p>
        </div>
        
    </div>

    <figure class="imgF"></figure>
</body>
</html>