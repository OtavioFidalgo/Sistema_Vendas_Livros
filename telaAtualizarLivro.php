<?php
    namespace PHP\Modelo\Telas;
    require_once('conexao.php');
    require_once('Atualizar.php');
    
    use PHP\Modelo\Conexao;
    use PHP\Modelo\Atualizar;
    

    $conexao = new Conexao();
    $atualizar = new Atualizar();
    
?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>AtualizarCadastro</title>
    <link rel="stylesheet" type="text/css" href="css/Livro.css" />
</head>
<body>
    <div class="header">Livraria Fidalgo</div>
    <div class="banner"><img src="imagens/bannerL.png" alt="Livro 1"></div>
    <div class="content">
        <div class="titles">
        <form class="login" method="POST">
            <select name="campo" aria-label="Default select example">
                <option selected>Escolha um campo para atualizar</option>
                <option value="titulo">Título</option>
                <option value="categoria">Categoria</option>
                <option value="preco">Preço</option>
            </select>
            <div class="mb-3">
                <label class="form-label">Novo Dado</label>
                <input type="text" class="form-control" name="novoDado" placeholder="NovoDado">
            </div>
            
            <button type="submit" class="btn btn-dark">Atualizar
                <?php
                    $atualizar->atualizarLivro($conexao, $_POST['campo'], $_POST['novoDado'], $_POST['codigo']);
                ?>
            </button>
            <button class="botaoL"><a href="telaAdmin.php">  Voltar  </button>
        </form>
        </div>
        
    </div>

    <figure class="imgF"></figure>
</body>
</html>