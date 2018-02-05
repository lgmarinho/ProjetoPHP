<?php include("cabecalho.php");


if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="text-success"> Usuário logado. </p>

<?php 
}
?>
<?php

if(isset($_GET["login"]) && $_GET["login"]==false) { ?>
	<p class="text-danger"> Usuário não encontrado. </p>

<?php 
}
?>

<h1>Seja Bem-Vindo!</h1>

<form action='login.php' method="post">
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



<?php include("rodape.php")?>