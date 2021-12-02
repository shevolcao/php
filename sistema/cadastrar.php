<?php  include_once 'lock.php';





if (!isset($_POST['salvar']) || empty($_POST['titulo']) || empty($_POST['genero']) || empty($_POST['ano']))
{
	header('location:index.php?msg=cadembranco');
}
else
{
	$id_filme = $_POST['id_filme'];
	$titulo	 = $_POST['titulo'];
	$genero   = $_POST['genero'];
	$ano = $_POST['ano'];

	include_once '../database/filme.dao.php';

	$result = salvar_filme($titulo, $genero, $ano);

	if ($result)
	{
		header('location:index.php?msg=cadastrado');
	}
	else
	{
		 header('location:index.php?msg=errocadastro'); 
	}
}

?>