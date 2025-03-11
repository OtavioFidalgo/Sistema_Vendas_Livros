<?php

    namespace PHP\Modelo;
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
    echo "<br><br>".$login1->imprimir();


?>