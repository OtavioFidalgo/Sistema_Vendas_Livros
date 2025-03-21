<?php
    namespace PHP\Modelo\Telas;
    require_once('conexao.php');
    require_once('Excluir.php');
    use PHP\Modelo\Conexao;
    use PHP\Modelo\Excluir;

    $conexao = new Conexao();
    $excluir = new Excluir();
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
        <form class="login" method="POST">
            <div class="mb-3">
                <label class="form-label">Digite o código que deseja excluir</label>
                <input type="text" class="form-control" name="codigo">
            </div>
            <button type="submit" class="btn btn-dark">Excluir
                <?php
                    $excluir->exculirCadastro($conexao, $_POST['codigo']);
                ?>
            </button>    
            <button type="submit" class="btn btn-dark"><a href="telaAdmin.php">Voltar</button>
        </form>
        </div>
    </div>

    <figure class="imgF"></figure>
</body>
</html>