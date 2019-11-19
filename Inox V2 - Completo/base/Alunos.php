<?php

//Importa a classe Conexao

require_once "Conexao.php";

class Alunos
{
    //Atributos

    public $matricula;
    public $nome;
    public $sexo;
    public $email;
    public $endereco;
    public $telefone;
    public $senha;

    //Metodos

    //Select

    public function listarTodos()
    {

        try {

            //Instanciar a classe conexão

            $bd = new Conexao();

            //Criar objeto com a conexão PDO

            $con = $bd->conectar();

            //Criar o comando sql para enviar ao banco de dados

            $sql = $con->prepare("select * from alunos");

            //Executar o comando sql

            $sql->execute();

            //verificar se retornou os valores

            if ($sql->rowCount() > 0) {

                //Retornar os dados dos alunos para o HTML / fetchALL retorna em formato de linhas/colunas

                return $result = $sql->fetchAll(PDO::FETCH_CLASS);

            }

        } catch (PDOException $msg) {

            echo "Não foi possivel listar os alunos: " . $msg->getMessage();

        }
    }

    public function inserir(){
        try{
            if(isset($_POST['nome']) && isset($_POST['sexo'])){
                $this->nome = $_POST["nome"];
                $this->sexo = $_POST["sexo"];
                $this->email = $_POST["email"];
                $this->endereco = $_POST["endereco"];
                $this->telefone = $_POST["telefone"];
                $this->senha = $_POST["senha"];

                $bd = new Conexao();
                $con = $bd->conectar();

                $sql = $con->prepare("insert into ALUNOS(MATRICULA, NOME, SEXO, EMAIL, ENDERECO, TELEFONE, SENHA)
                                        VALUES (NULL,?,?,?,?,?,?)");

                $sql->execute(array(
                    $this->nome,
                    $this->sexo,
                    $this->email,
                    $this->endereco,
                    $this->telefone,
                    $this->senha
                ));

                var_dump($sql->errorInfo());

                if ($sql->rowCount() > 0){
                    header("location: index_alunos.php");
                }
            }else{
                header("location: index_alunos.php");
            }
        }catch (PDOException $msg){
            echo "Não foi possivel inserir o aluno ".$msg->getMessage();
        }
    }

    public function excluir($matricula){
        try{
            if(isset($matricula)){
                $this->matricula = $matricula;

                $bd = new Conexao();
                $con = $bd->conectar();

                $sql = $con->prepare("delete from ALUNOS where MATRICULA = ?");
                $sql->execute(array($this->matricula));

                if ($sql->rowCount() > 0){
                    header("location:index_alunos.php");
                }
            }else{
                header("locatio:index_alunos.php");
            }
        }catch(PDOException $msg){
            echo "Não foi possível excluir os alunos: ".$msg->getMessage();
        }
    }

    public function alterar(){
        try{
            if (isset($_POST['Salvar'])){
                $this->matricula = $_GET["matricula"];
                $this->nome = $_POST["nome"];
                $this->sexo = $_POST["sexo"];
                $this->email = $_POST["email"];
                $this->endereco = $_POST["endereco"];
                $this->telefone = $_POST["telefone"];
                $this->senha = $_POST["senha"];

                $bd = new Conexao();
                $con = $bd->conectar();

                $sql = $con->prepare("update ALUNOS set NOME = ?, SEXO = ?, EMAIL = ?, ENDERECO = ?, TELEFONE = ?, SENHA = ? where MATRICULA = ?");
                $sql->execute(array(
                    $this->nome,
                    $this->sexo,
                    $this->email,
                    $this->endereco,
                    $this->telefone,
                    $this->senha,
                    $this->matricula
                ));

                if ($sql-> rowCount() > 0){
                    header("location:index_alunos.php");
                }
            }else{
                header("location:index_alunos.php");
            }
        }catch (PDOException $msg){
            echo "Não foi possível alterar o alunos: ".$msg->getMessage();
        }
    }

    public function listarID($matricula){
        try{
            if (isset($matricula)){
                $this->matricula = $matricula;

                $bd = new Conexao();
                $con = $bd->conectar();

                $sql = $con->prepare("select * from ALUNOS where MATRICULA = ?");
                $sql->execute(array($this->matricula));

                if ($sql->rowCount() > 0){
                    return $result = $sql->fetchObject();
                }
            }
        }catch(PDOException $msg){
            echo "Não foi possível listar o alunos: ".$msg->getMessage();
        }
    }
}