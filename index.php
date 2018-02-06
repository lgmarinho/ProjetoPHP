<?php include("cabecalho.php");
include ("funcaoUsuario.php");

if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="alert-success"> Usuário logado. </p>

<?php 
}
?>
<?php

if(isset($_GET["login"]) && $_GET["login"]==false) { ?>
	<p class="alert-danger"> Usuário não encontrado. </p>

<?php 
} 
?>

<?php 
	if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true) { ?>
		<p class="alert-danger"> Sem autorização de acesso! </p>
<?php 
} 
?>


<h1>Seja Bem-Vindo!</h1>
<?php 

if (usuarioEstaLogado()){ ?>

  <p class="alert-success"> Usuário logado como <?= $_COOKIE["usuario_logado"] ?> </p>

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


<?php include("rodape.php")?>