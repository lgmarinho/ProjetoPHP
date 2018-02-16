<?php require_once("cabecalho.php");
 require_once("bancoCategoria.php");
 require_once("funcaoUsuario.php");

 VerificaLogin();

 $categorias = ListaCategoria($conexao);

 $produto = array("nome" => "", "preco" => "", "descricao" => "", "categoria_id" => "1");

 $usado = "";

?>



<h1> Formulário do Produto </h1>
<form action="AddProduto.php" method="post">
    <table class="table">
     <?php include("ProdFormBase.php"); ?>  
      <tr>
         <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
      </tr>       
	</table>	 	
</form>
	
<?php require_once("rodape.php")?>