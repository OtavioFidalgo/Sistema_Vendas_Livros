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
    <title>home</title>
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
            <h3>Títulos em Alta</h3>
            <div class="title-box">
                <img src="imagens/livro_1.png" alt="Livro 1">
                O Paciente<br>R$ 80,00
                <button class="botao" >Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_2.png" alt="Livro 2">
                Harry Potter<br>R$ 90,00
                <button class="botao" >Comprar</button>
            </div>
            <div class="title-box">
                <img src="imagens/livro_3.png" alt="Livro 3">
                Coraline<br>R$ 100,00
                <button class="botao" >Comprar</button>
            </div>
        </div>
        <div class="news">
            <h3>Últimas Notícias Literárias</h3>
            <p>O mundo literário está em polvorosa com o lançamento 
                do novo romance da premiada autora Maria Fidalgo. 
                Seu mais recente livro, "Sombras do Amanhã", já está 
                liderando as listas de mais vendidos. Além disso, 
                a Bienal do Livro deste ano promete ser um dos maiores 
                eventos literários da década, reunindo autores renomados 
                e novas vozes da literatura. Fique atento às próximas 
                novidades e lançamentos exclusivos!</p>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>

        