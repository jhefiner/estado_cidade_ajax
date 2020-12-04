<?php
    $nome=$_POST["nome"];
    $estado=$_POST["uf"];
    $cidade=$_POST["cidade"];

    include "inc/cabecalho_conexao.inc";
    $SQL = "INSERT INTO individuos (nome, uf, city) 
                VALUE ('$nome', '$estado', '$cidade')";

        echo'<center><h2 class="">Pessoa cadastrada com sucesso!<h2>';
        
        include "inc/rodape_conexao.inc";
?>