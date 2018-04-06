<?php

require_once("funcaoUsuario.php");
logout();
$_SESSION["success"] = "Logout efetuado.";
header("Location: index.php");
die();

?>