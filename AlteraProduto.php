<?php require_once("cabecalho.php");
      require_once("dbProduto.php"); 


$id = $_POST['id'];
$nmProduto = $_POST['produto'];
$valor = $_POST['valor'];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];

if(array_key_exists('usado', $_POST)){
   
   $usado = "true";
} 
else {

   $usado = "false";

}


if(AlterarProduto($conexao, $id, $nmProduto, $valor, $descricao, $categoria_id, $usado)) { ?>
<p class="alert-success"> Produto <?=  $nmProduto ?> Alterado. Por <?=   $valor; ?> Reais. </p>

<?php } else {

    $msg = mysqli_error($conexao); 
    
?>
<p class="alert-danger"> Produto  <?=  $nmProduto ?> não adicionado.: <?= $msg ?> </p>
<?php
}
?>

<?php require_once("rodape.php");?>
