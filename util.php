<?php  
// função para validar uma mensagem e retornar um texto apropriado
function validar_msg($msg)
{

	switch ($msg) {
		case 'embranco':
			$retorno = '<h3 class="alert alert-warning">Informe todos os dados para efetuar o login!</h3>';
			break;

		case 'invalido':
			$retorno = '<h3 class="alert alert-danger">Atenção: Usuário ou senha inválidos</h3>';
			break;

		case 'cadembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do filme para cadastrar!</h3>';
			break;

		case 'edtembranco':
			$retorno = '<h3 class="alert alert-warning">Preencha todos os dados do filme para editar!</h3>';
			break;

		case 'cadastrado':
			$retorno = '<h3 class="alert alert-success">filme cadastrado com sucesso!</h3>';
			break;

		case 'errocadastro':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao efetuar o cadastro. Tente novamente mais tarde...</h3>';
			break;

		case 'idinvalido':
			$retorno = '<h3 class="alert alert-warning">Atenção: filme inválido. por favor, repita a operação</h3>';
			break;

		case 'filmedeletado':
			$retorno = '<h3 class="alert alert-success">filme excluído com sucesso!</h3>';
			break;

		case 'errodeletar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao excluir filme. Tente novamente mais tarde...</h3>';
			break;

		case 'editado':
			$retorno = '<h3 class="alert alert-success">Dados do filme alterados com sucesso!</h3>';
			break;

		case 'erroeditar':
			$retorno = '<h3 class="alert alert-danger">Atenção: erro ao alterar dados do filme. Tente novamente mais tarde...</h3>';
			break;

		default:
			$retorno = '';
			break;
	}

	return $retorno;

}
?>