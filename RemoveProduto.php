<?php include("cabecalho.php");
      include("conexao.php");
      include("dbProduto.php");

$id = $_POST['id'];

RemoverProduto($conexao,$id);
header("Location: ProdutoLista.php?removido=true");
die();
?>
