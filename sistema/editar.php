<?php include_once 'lock.php';
include_once '../database/filme.dao.php'; 

if (!isset($_GET['id_filme']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	// tentar buscar o filme especificado no id
	$result = buscar_filme($_GET['id_filme']);

	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		// converter o retorno (result) em um array associativo
		$filme = mysqli_fetch_assoc($result);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Editar filme</title>
</head>
<body class="container-fluid">

	<h1>filmeSystem - Editar filme</h1>

	<p>
		<a href="index.php" class="btn btn-primary btn-sm">Cencelar Edição</a>
	</p>

	<h3>Editar Dados do filme:</h3>

	<div class="col-5">
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Título</label><br>
				<input type="text" name="titulo" required value="<?= $filme['titulo'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">genero</label><br>
				<input type="text" name="genero" required value="<?= $filme['genero'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">ano</label><br>
				<input type="text" name="ano" required value="<?= $filme['ano'] ?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary">Salvar Alterações</button>
			</p>

			<input type="hidden" name="id_filme" value="<?= $filme['id_filme'] ?>">

		</form>
	</div>

</body>
</html>