<?php
    namespace PHP\Modelo;
    require_once('Conexao.php');
    use PHP\Modelo\Conexao;

    $conexao = new Conexao();
    
    class Cadastro{
        /*private int $codigo;
        private string $nome;
        private string $sobrenome;
        private string $email;
        private string $dataNascimento;
        private string $tele;
        private string $endereco;
        private string $senha;*/

        public function cadastro(Conexao $conexao, string $nome, string $sobrenome, string $email, string $dataNascimento, string $tele, string $endereco, string $senha)
        {
            try{
            $conn = $conexao->conectar();
            $sql = "insert into cadastrar (codigo, nome, sobrenome, email, dataNascimento, telefone, endreco, senha) value ('','$nome', '$sobrenome', '$email', '$dataNascimento', '$tele', '$endereco', '$senha')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                return "<br>Cadastrado com Sucesso!";
            }
            return "<br>ERRO";
            }catch(Exception $erro){
            return "<br><br> Erro Fatal";
            }

        }

        public function cadastroLivro(Conexao $conexao, string $titulo, string $categoria, int $preco)
        {
            try{
            $conn = $conexao->conectar();
            $sql = "insert into livros (codigo, titulo, categoria, preco) value ('','$titulo', '$categoria', '$preco')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                return "<br>Livro cadastrado com Sucesso!";
            }
            return "<br>ERRO";
            }catch(Exception $erro){
            return "<br><br> Erro Fatal";
            }

        }
    }
  ?>