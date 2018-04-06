<?php require_once("cabecalho.php"); ?>


<form action="EnviaEmail.php" method="post">
	<table class="table">
     <tr>         
       <td>Nome:</td>
       <td><input class="form-control" type="text" name="nome"></td>
     </tr>       

     <tr>
       <td>Email:</td>  
      <td><input class="form-control" type="text" name="email"></td>
     </tr>

     <tr>
       <td>Mensagem:</td>  
       <td><textarea class="form-control" name="mensagem"></textarea></td>
     </tr>

      <tr>
         <td><input class="btn btn-primary" type="submit" value="Enviar"></td>
      </tr>       
	</table>	 	
</form>

<?php require_once("rodape.php"); ?>