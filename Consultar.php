<?php
    namespace PHP\Modelo;
    require_once('Conexao.php');
    use PHP\Modelo\Conexao;

    class Consultar{

        function consultarCadastro(Conexao $conexao, string $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from cadastro where codigo = '$codigo' ";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                        echo"<br>Nome: ".$dados['nome']. 
                            "<br>Sobrenome: ".$dados['sobrenome']. 
                            "<br>E-mail: ".$dados['email']. 
                            "<br>Data de Nascimento: ".$dados['dataNascimento']. 
                            "<br>Telefone: ".$dados['tele']. 
                            "<br>Endereço: ".$dados['endereco']. 
                            "<br>Senha: ".$dados['senha'];
                            return;   
                }
            }
            catch(Exception $erro){
                echo "algo deu errado! <br><br>".$erro;
            }
        }

        function consultarLivro(Conexao $conexao, string $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from livros where codigo = '$codigo' ";
                $result = mysqli_query($conn, $sql);

                while($dados = mysqli_fetch_Array($result)){
                        echo"<br>Título: ".$dados['titulo']. 
                            "<br>Categoria: ".$dados['categoria']. 
                            "<br>Preço do Livro: ".$dados['preco'];
                            return; 
                }
            }
            catch(Exception $erro){
                echo "algo deu errado! <br><br>".$erro;
            }
        }
    }
?>