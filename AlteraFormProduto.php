<?php include("cabecalho.php");
 include("conexao.php");
 include("bancoCategoria.php");
 include("dbProduto.php");

$id = $_GET['id'];
$produto = BuscarProduto($conexao, $id);
$categorias = ListaCategoria($conexao);
$usado = $produto['usado'] ? "checked'=checked'" : "";

?>

<h1> Formulário do Produto </h1>
<form action="AlteraProduto.php" method="post">
    <input type="hidden" name ="id" value="<?= $produto['id']?>">
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
		       <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
        </tr>
        
        <tr>

          <?php
              $usado = $produto['usado'] ? "checked='checked'": "";
          ?>

          <td>Usados:</td>

          <td>
             <input type="checkbox" name="usado" <?= $usado?>  value="true"> Usado 
          <tr>
          <td>Categoria:</td>	
          <td>
            <select name="categoria_id" class="form-control">
          	    <?php 
                  foreach ($categorias as $categoria): 
                  $CatVerdadeira = $produto['categoria_id'] == $categoria['id'];
                  $selecao = $CatVerdadeira ? "selected='selected'" : "";
                
                ?>
                <option value="<?= $categoria['id']?>" <?=$selecao?> ><?=$categoria['nMCategoria']?></option>    


                <?php endforeach ?>   	            
            </select> 
          </td>  
        </tr>

        <tr>
		  <td><input class="btn btn-primary" type="submit" value="Alterar"></td>
		</tr> 
	</table>	 	
</form>
	
<?php include("rodape.php")?>