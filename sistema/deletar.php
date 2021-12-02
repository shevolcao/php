<?php  include_once 'lock.php';

if (!isset($_GET['id_filme']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_filme = $_GET['id_filme'];

	include_once '../database/filme.dao.php';

	$result = deletar_filme($id_filme);

	if ($result)
	{
		header('location:index.php?msg=filmedeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>