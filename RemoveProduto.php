<?php include("cabecalho.php");
      include("conexao.php");
      include("dbProduto.php");
      include("funcaoUsuario.php");

$id = $_POST['id'];

RemoverProduto($conexao,$id);
$_SESSION["success"] = "Produto removido.";
header("Location: ProdutoLista.php");
die();
?>
