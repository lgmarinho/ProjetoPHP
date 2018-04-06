<?php


session_start();

function UsuarioLogado($email){
   
 return $_SESSION["usuario_logado"];

}

function usuarioEstaLogado(){
	return isset($_SESSION['usuario_logado']);

}

function VerificaLogin(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] ="Não autorizado para esta funcionalidade.";
       header("Location: index.php"); 
       die();
	}
}

function LogaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
}


function logout(){	
  session_destroy();
  session_start();
}


?>