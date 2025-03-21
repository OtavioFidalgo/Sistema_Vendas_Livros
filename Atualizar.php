<?php
    namespace PHP\Modelo;
    require_once('conexao.php');
    require_once('Consultar.php');
    use PHP\Modelo\Conexao;
    use PHP\Modelo\Consultar;

    class Atualizar{
        function atualizarCadastro(Conexao $conexao, string $campo, string $novoDado, string $codigo){
            try{
                $codigo ="";
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                    $codigo = $consultar->consultarCadastro($conexao, $cpf);
                    $sql = "update cadastro set $campo = '$novoDado' where codigo = '$codigo' ";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    echo "Cadastro atualizado com sucesso!";
                }else{
                    echo "Cadastro não Atualizado!";
                }

            }
            catch(Exception $erro){
                echo "algo deu errado!<br><br>$erro";
            }
        }

        function atualizarLivro(Conexao $conexao, string $campo, string $novoDado, string $codigo){
            try{
                $codigo ="";
                $consultar = new Consultar();
                $conn = $conexao->conectar();
                    $codigo = $consultar->consultarLivro($conexao, $cpf);
                    $sql = "update livros set $campo = '$novoDado' where codigo = '$codigo' ";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    echo "Livro atualizado com sucesso!";
                }else{
                    echo "Livro não Atualizado!";
                }

            }
            catch(Exception $erro){
                echo "algo deu errado!<br><br>$erro";
            }
        }
    }

?>