<?php include_once 'lock.php';
// se o form de edição nao foi enviado ou se algum campo estiver em branco
if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['ano']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_filme = $_POST['id_filme'];
	$titulo	  = $_POST['titulo'];
	$genero    = $_POST['genero'];
	$ano  = $_POST['ano'];

	include_once '../database/filme.dao.php';

	$result = editar_filme($id_filme, $titulo, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>