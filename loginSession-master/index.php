<?php

    session_start();

    $existe = isset($_SESSION['esta_logado']);

    if ($existe == false){

        header("location: login.php");

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

    <link rel="stylesheet" href="style.css">


</head>
<body>

	<div class="social">

		<a href="verifica_usuario.php?acao=sair" class="sair">sair</a>

		<img src="http://static1.squarespace.com/static/5447822ae4b007ed052fb29a/t/5630152de4b01c511d373b8d/1494547503256/?format=1500w"
             alt="" width="200" height="200">
		<h3>Bem vindo!</h3>
	</div>

</body>
</html>