<?php

    /*namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Livro.php');
    require_once('Compra.php');
    require_once('Reservas.php');
    require_once('Login.php');

    use PHP\Modelo\Cliente;
    use PHP\Modelo\Livro;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Reserva;
    use PHP\Modelo\Entrar;

    $cliente1 = new Cliente ('Cleiton', 'Rua dos Bobos - 00', '1198123456', '31/07/2006', 'cleiton02@email.com', '123');

    $livro1 = new Livro ('Coraline', 'Suspense', '341', 'R$ 130,00');

    $compra1 = new Compra ($livro1, $cliente1, '11/03/2025', '5678.1236.5678');

    $reserva1 = new Reserva ('Disponível');

    $login1 = new Entrar ('cleiton02@email.com', '123');


    echo "<br><br>".$cliente1->imprimir();
    echo "<br><br>".$livro1->imprimir();
    echo "<br><br>".$compra1->imprimir();
    echo "<br><br>".$reserva1->imprimir();
    echo "<br><br>".$login1->imprimir();*/


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="css/estiloLivro.css" />
</head>
<body Id="Fundo">
    <div Id="topo">
        <br>
        <figure class="imgH">
            <h1 style="font-size: 80px;">Livraria Fidalgo</h1>
        </figure>
        <br>
        
    </div>
        <form class="nav">
            <div id="ban">
                <img class="bn" href="imagens/bannerL.png">
                    <button class="home" type="button">  Home  </button>
                    <button class="livros" type="button" href="Livros.html">  Livros  </button>
                    <button class="compras" type="button" href="Compras.html">  Compras  </button>
                    <button class="sair" type="button">  Sair  </button>
                <img class="bn" src="imagens/bannerL.png">  
                    
            </div>
        </form>
    <div id="titulo">
        <br><br>
        <h3>TÍTULOS EM ALTA</h3>
        <br>
            <img class="li" href="imagens/livro_1.png"><img class="li" src="imagens/livro_1.png">
            <img class="li2" href="imagens/livro_2.png"><img class="li2" src="imagens/livro_2.png">
            <img class="li3" href="imagens/livro_3.png"><img class="li3" src="imagens/livro_3.png">

            <!-- <div class="noticia"><h4>Últimas Notícias Literarias</h4>
                    <p>BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla
                    BlaBlaBlaBla</p>
            </div>-->
        
    </div>
    <div id="tLivros">
        <titulo class="ti"><h5>Titulo Livro</h5></titulo>
        <titulo class="preco"><h5>R$ 000,00</h5></titulo>
    </div>
    <div id="tLivros2">
        <titulo class="ti"><h5>Titulo Livro</h5></titulo>
        <titulo class="preco"><h5>R$ 000,00</h5></titulo>
    </div>
    <div id="tLivros3">
        <titulo class="ti"><h5>Titulo Livro</h5></titulo>
        <titulo class="preco"><h5>R$ 000,00</h5></titulo>
    </div>
    <br>
    

    <div Id="topo">
        <br>
        <figure class="imgF"></figure>
        <br>
        
    </div>

  
</body>
</html>