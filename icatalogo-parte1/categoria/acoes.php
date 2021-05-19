<?php

require("../database/conexao.php");
switch($_POST["acao"]){
    case "inserir":
    // se houver o envio do formulário com uma tarefa
        if (isset($_POST["descricao"])) {
            $categoria = $_POST["descricao"];
                $sqlDescricao = "INSERT INTO tbl_categoria (descricao) VALUES ('$categoria')";
                $resultado= mysqli_query($conexao, $sqlDescricao);
           
            }
        
            header("location: index.php");
            break;

            case "deletar":
                if(isset($_POST["categoriaId"])) {
                $categoriaId = $_POST["categoriaId"];
                //declarar o sql de delete

                $sqlDelete = " DELETE FROM tbl_categoria WHERE id = ('$categoriaId') ";
                
                //executar o sql
                $resultado = mysqli_query($conexao, $sqlDelete);
                header('location: index.php');
                }
                break;
}