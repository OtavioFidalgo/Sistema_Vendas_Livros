<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function exculirCadastro(Conexao $conexao, string $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from cadastro where codigo = '$codigo' ";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "cadastro excluido com sucesso!";
                }else{
                    echo "cadastro não excluido!";
                }
            }
            catch(Exception $erro){
                echo "algo deu errado!";
            }
        }

        function exculirLivro(Conexao $conexao, string $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "delete from livros where codigo = '$codigo' ";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);
                if($result){
                    echo "Livro excluido com sucesso!";
                }else{
                    echo "Livro não excluido!";
                }
            }
            catch(Exception $erro){
                echo "algo deu errado!";
            }
        }
    }

?>