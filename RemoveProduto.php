<?php require_once("cabecalho.php");
      require_once("dbProduto.php");
      require_once("funcaoUsuario.php");

$id = $_POST['id'];

RemoverProduto($conexao,$id);
$_SESSION["success"] = "Produto removido.";
header("Location: ProdutoLista.php");
die();
?>
