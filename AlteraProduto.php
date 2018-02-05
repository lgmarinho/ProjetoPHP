<?php include("cabecalho.php");
      include("conexao.php");
      include("dbProduto.php"); 


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
<p class="text-success"> Produto <?=  $nmProduto ?> Alterado. Por <?=   $valor; ?> Reais. </p>

<?php } else {

    $msg = mysqli_error($conexao); 
    
?>
<p class="text-danger"> Produto  <?=  $nmProduto ?> não adicionado.: <?= $msg ?> </p>
<?php
}
?>

<?php include("rodape.php");?>
