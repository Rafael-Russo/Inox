<?php

//Importa a classe Conexao

require_once "Conexao.php";

class Produtos{

    // Campos do BD

    public $codigo;
    public $nome;

    public function listar(){

        try{
            
            $bd = new Conexao();

            $con = $bd->conectar();

            $sql = $con->prepare("SELECT * FROM PRODUTOS");

        }catch (PDOExeception $msg){

            echo "Não foi possível listar os Produtos: " . $msg->getMessage();

        }
    }

}