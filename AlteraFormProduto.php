<?php include("cabecalho.php");
 include("conexao.php");
 include("bancoCategoria.php");
 include("dbProduto.php");

$id = $_GET['id'];

$produto = BuscarProduto($conexao, $id);

$categorias = ListaCategoria($conexao);

print_r($produto);

?>





<h1> Formulário do Produto </h1>
<form action="AlteraProduto.php" method="post">
    <table class="table">
        <tr>
		  <td>Produto:</td>
		  <td><input class="form-control" type="text" name="produto" value="<?=$produto['nome']?>"></td>
        </tr>

        <tr>
		  <td>Valor:</td>  
		<td><input class="form-control" type="number" name="valor" value="<?=$produto['preco']?>"></td>
        </tr>

        <tr>
		  <td>Descrição:</td>  
		<td><textarea class="form-control" name="descricao" value="<?=$produto['descricao']?>"></textarea></td>
        </tr>
        
        <tr>
          <td>Usados:</td>

          <td>
             <input type="checkbox" name="usado" value="true"> Usado</td>
        <tr>
          <td>Categoria:</td>	
          <td>
            <select name="categoria_id">
          	    <?php foreach ($categorias as $categoria): ?>
                     <option value="<?= $categoria['id']?>"><?=$categoria['nMCategoria']?></option>
                <?php endforeach ?>   	            
            </select> 
          </td>  
        </tr>

        <tr>
		  <td><input class="btn btn-primary" type="submit" value="Cadastrar"></td>
		</tr> 
	</table>	 	

	
<?php include("rodape.php")?>