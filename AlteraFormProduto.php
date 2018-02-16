<?php require_once("cabecalho.php");
 require_once("bancoCategoria.php");
 require_once("dbProduto.php");

$id = $_GET['id'];
$produto = BuscarProduto($conexao, $id);
$categorias = ListaCategoria($conexao);
$usado = $produto['usado'] ? "checked'=checked'" : "";

?>

<h1> Formulário do Produto </h1>
<form action="AlteraProduto.php" method="post">
    <input type="hidden" name ="id" value="<?= $produto['id']?>">
    <table class="table">
      <?php include("ProdFormBase.php"); ?>
        
        <tr>
		  <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
		</tr> 
	</table>	 	
</form>
	
<?php require_once("rodape.php")?>