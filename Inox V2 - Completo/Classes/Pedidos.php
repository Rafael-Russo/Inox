<?php

//Importa a classe Conexao

require_once "Conexao.php";

class Pedido{

    // Campos do BD

    public $codigo;
    public $nome;
    public $dt_inicio;
    public $dt_fim;
    public $largura;
    public $comprimento;
    public $produtos;

    public function listarPedidos(){

        try{
            
            

        }catch (PDOExeception $msg){

            

        }
    }

    public function cadPedido(){

        try{

            if(isset($_POST['largura']) && isset($_POST['comprimento'])){
                $this->nome = $_POST['produto'];
                $this->dt_inicio = '0000-00-00';            // Aprender como pegar data do computador
                $this->largura = $_POST['largura'];
                $this->comprimento = $_POST['comprimento'];
                $this->produtos = $_POST['produto_codigo'];

                $bd = new Conexao();
                $con = $bd->conectar();

                $sql = $con->prepare("INSERT INTO PEDIDOS(CODIGO, NOME, DT_INICIO, DT_FIM, LARGURA, COMPRIMENTO, PRODUTOS_CODIGO) 
                                    VALUES(NULL,?,?,NULL,?,?,?)");
                $sql->execute(array(
                    $this->nome,
                    $this->dt_inicio,
                    $this->largura,
                    $this->comprimento,
                    $this->produtos
                ));

                if($sql->rowCount() > 0){
                    header("formulario.php");
                }
            }else{
                header("index.html");
            }

        }catch(PDOExeception $msg){
            echo "Não foi possivel cadastrar o pedido: ".$msg->getMessage();
        }

    }

}