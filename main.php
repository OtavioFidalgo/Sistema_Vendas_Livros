<?php

    namespace PHP\Modelo;
    require_once('Cliente.php');
    require_once('Livro.php');
    require_once('Compra.php');
    require_once('Reservas.php');

    use PHP\Modelo\Cliente;
    use PHP\Modelo\Livro;
    use PHP\Modelo\Compra;
    use PHP\Modelo\Reserva;

    $cliente1 = new Cliente ('Gizela', 'Rua dos Bobos - 00', '1198123456', '31/07/2006', 'gizela01@email.com', '123');

    $livro1 = new Livro ('A Primeira Faculdade', 'Comédia', '341', 'R$ 130,00');

    $compra1 = new Compra ($livro1, $cliente1, '5678.1236.5678');

    $reserva1 = new Reserva ('Disponível');


    echo "<br><br>".$cliente1->imprimir();
    echo "<br><br>".$livro1->imprimir();
    echo "<br><br>".$compra1->imprimir();
    echo "<br><br>".$reserva1->imprimir();

?>