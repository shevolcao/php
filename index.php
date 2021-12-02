<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - TARTARUGA FILMES NINJA</title>

</head>

<body class="container-fluid">

	<h1>Projeto Final - TARTARUGA MUTANTES FILMES<br>
		Aluno: Rodrigo Accioly // UP: 27838340</h1>
	<br>
	<h3>O nome do projeto vai variar durante o projeto sinta-se a vontade parar rir.</h2>

		<?php

		if (isset($_GET['msg'])) {
			include_once 'util.php';
			echo validar_msg($_GET['msg']);
		}
		?>
		<br><br>
		<h2>Área de Login:</h2>

		<form action="validar.php" method="post">

			<p>
				<label>Usuário:</label><br>
				<input type="text" name="usuario" required>
			</p>

			<p>
				<label>Senha:</label><br>
				<input type="password" name="senha" required>
			</p>

			<p>
				<button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>
			</p>

		</form>

</body>

</html>