<?php

include("conexao.php");

function ListaProdutos($conexao){
    $ArrayProduto = array();
    $resultado = mysqli_query($conexao, "select pr.*, c.nmCategoria as categoria_nome from produto as pr join categorias as c on pr.categoria_id = c.id order by pr.id");

    while ($produto = mysqli_fetch_assoc($resultado)){

         array_push($ArrayProduto, $produto);
    }

    return $ArrayProduto;

}

function BuscarProduto($conexao, $id){
    $SqlBuscaQuery = "Select * from produto where id = {$id}";
    $resultadoBusca = mysqli_query($conexao,$SqlBuscaQuery);
    return mysqli_fetch_assoc($resultadoBusca);

}

function AlterarProduto($conexao,$id,$nmProduto,$valor,$descricao,$categoria_id,$usado){
    $SqlAlteraQuery = "update produto set nome='{$nmProduto}', preco = {$valor}, descricao = '{$descricao}', categoria_id= {$categoria_id}, usado = {$usado} where id = '{$id}'";
    return mysqli_query($conexao,$SqlAlteraQuery);

}

function InserirProduto($conexao, $nmProduto, $valor,$descricao,$categoria_id,$usado){
    $nmProduto = mysqli_real_escape_string($conexao, $nmProduto);
    $descricao = mysqli_real_escape_string($conexao, $descricao);    
    $SqlInsertQuery = "insert into produto (nome, preco, descricao, categoria_id, usado) values ('{$nmProduto}',{$valor},'{$descricao}','{$categoria_id}',{$usado})";
      
    $ResultadoInsert = mysqli_query($conexao,$SqlInsertQuery);
    return $ResultadoInsert;
    
}

function RemoverProduto($conexao, $id){
    $SqlDeleteQuery = "delete from produto where id ={$id}";
    return mysqli_query($conexao, $SqlDeleteQuery);
               
}