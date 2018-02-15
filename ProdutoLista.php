<?php include("cabecalho.php");
      include("conexao.php");
      include("dbProduto.php");
      include("funcaoUsuario.php");
      
      VerificaLogin();

?>      

<?php if(isset($_SESSION["success"])){
?>
   <p class="alert-success"> <?=$_SESSION["success"]?> </p>    
 
<?php

    }

?>


<table class="table table-striped table-bordered">
<?php
	$produtos = ListaProdutos($conexao);

	foreach ($produtos as $produto) {
	?>
	<tr>
		<td><?= $produto['nome']; ?></td>
		<td>R$<?= $produto['preco']; ?></td>
		<td><?= substr($produto['descricao'],0,50) ?></td>
		<td><?= $produto['categoria_nome'] ?></td>
		<td><?= $produto['usado'] ?></td>
		<td><a class="btn btn-primary" href="AlteraFormProduto.php?id=<?=$produto['id']?>"> Alterar</a></td>
		<td>
			<form action="RemoveProduto.php" method="post">
			    <input type="hidden" name="id" value="<?=$produto['id']?>"/>  
			    <button class="btn btn-danger"> Excluir </button> 
		    </form>
		</td>

	</tr>	
	<?php	
	}
?>
</table>

<?php include("rodape.php")?>