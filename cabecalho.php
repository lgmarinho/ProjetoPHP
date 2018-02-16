<?php require_once("MsgAlerta.php");
error_reporting(E_ALL ^ E_NOTICE);

?>

<html>



<head> 
	<title>Loja do Gustavo</title>
	<meta charset="utf-8">
   <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-reboot.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
	<link href="css/bootstrap-grid.css" rel="stylesheet">
	</head>


<body>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <div class="dropdown show">
                 <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Produto </a>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                     <a class="dropdown-item"  href="ProdutoForm.php">Adicionar Produto</a>
                     <a class="dropdown-item" href="ProdutoLista.php">Lista de Produtos</a>                     
                 </div>
            </div>
            <li class="nav-item active">
               <a class="nav-link" href="contato.php">Contato</a>
            </li>          
        </ul>
</nav>

	<div class="container">
		<div class="principal">
         <div id="alerta"> 
            <?php
               msgAlerta("danger");
               msgAlerta("success");   
            ?>
         </div>      