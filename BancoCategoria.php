<?php
   include("conexao.php");

   function ListaCategoria($conexao){
   $categorias = array();
   $SQLSelectQuery = "select * from categorias";
   $resultado = mysqli_query($conexao,$SQLSelectQuery);
   while($categoria = mysqli_fetch_assoc($resultado)) {

   	    array_push($categorias,$categoria);

   }

    return $categorias;

}




?>



