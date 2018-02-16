<?php require_once("cabecalho.php");
      require_once("dbProduto.php"); 
      require_once("funcaoUsuario.php");
      
      VerificaLogin();

?>
<?php

$nmProduto = $_POST["produto"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

if(array_key_exists("usado", $_POST)){
   
   $usado = "true";
} 
else {

   $usado = "false";

}



if (InserirProduto($conexao, $nmProduto, $valor, $descricao, $categoria_id, $usado)){ ?>

<p class="text-success"> Produto <?=  $nmProduto ?> adicionado. Por <?php echo  $valor; ?> Reais. </p>

<?php } else {

    $msg = mysqli_error($conexao); 

?>
<p class="text-danger"> Produto <?=  $nmProduto ?> não adicionado.: <?= $msg ?> </p>
<?php
}

?>

<?php require_once("rodape.php");?>
