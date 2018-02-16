<?php 

require_once("cabecalho.php");
require_once("funcaoUsuario.php");

?>



<h1>Seja Bem-Vindo!</h1>
<?php 

if (usuarioEstaLogado()){ ?>
  <p class="alert-success"> Usuário logado como <?= $_SESSION["usuario_logado"] ?></p> 
  <p><a href="logout.php"> Efetuar Logout</a></p>

<?php 
} else {
?>

<form action="login.php" method="post">
	<table class="table">
		<tr>
			<td> Login/Email: </td>
			<td><input class="form-control" type="email" name="email"></td>
		</tr>		
		<tr>
           <td> Senha: </td>
           <td><input class="form-control" type="password" name="senha"></td>
		</tr>	
		<tr>
		   <td><button type="submit" class="btn btn-primary"> Efetuar Login</td>
		</tr>	
	</table>
</form>

<?php
}
?>


<?php require_once("rodape.php")?>