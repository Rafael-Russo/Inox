<?php

class Conexao
{
    // Atributos

    private $servidor;
    private $banco;
    private $usuario;
    private $senha;

    // Metodos

    function __construct()
    {
        // Definir os valores para conexão

        // Mudar para o servidor da AWS

        $this->servidor = "localhost";
        $this->banco = "INOX";
        $this->usuario = "root";
        $this->senha = "";

    }

    // metodo para conectar

    public function conectar(){

        //validar a execução do codigo

        try{

            //Criar conexão

            $con = new PDO("mysql:host=".$this->servidor.";dbname=".$this->banco.";charset=utf8",$this->usuario,$this->senha);

            // Retornar conexão

            return $con;

        }catch(PDOException $msg){

            echo "Erro ao conectar ao banco: ".$msg->getMessage();

        }

    }

}