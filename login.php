<?php
require_once("cabecalho.php");
require_once("BancoUsuario.php");
require_once("funcaoUsuario.php");

$usuario = BuscarUsuario($conexao, $_POST["email"], $_POST["senha"]);

LogaUsuario();


if ($usuario == null){ 
    $_SESSION["danger"] = "Usuário ou senha inválido.";  
	header("location: index.php");

} else {
	$_SESSION["sucess"] = "Usuário Logado.";
	LogaUsuario($usuario["email"]);  
	header("location: index.php");
}
die();

require_once ("rodape.php");

?>
