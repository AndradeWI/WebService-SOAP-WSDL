<?php
if(isset($_POST['op'])) {
	$client = new SoapClient('http://DESKTOP-UCU9QN2:8080/WSFilme/WSFilmes?wsdl');

	switch ($_POST['op']) {

		case 'cadastrar':
		
			$titulo = $_POST['titulo'];
			$diretor = $_POST['diretor'];
			$estudio = $_POST['estudio'];
			$genero = $_POST['genero'];
			$ano_lancamento = $_POST['ano_lancamento'];

			$function = 'cadastrar';
			$arguments= array('titulo' => $titulo, 
							  'diretor' => $diretor, 
							  'estudio' => $estudio, 
							  'genero' => $genero, 
							  'ano_lancamento' => $ano_lancamento);

			$result = $client->__soapCall($function,array('parameters' => $arguments));

			$mensagem= $result->return;
			setcookie('msg',$mensagem );
			header('Location: index');
			break;

		case 'editar':

			$titulo = $_POST['titulo'];
			$id = $_POST['id'];

			$function = 'alterarNome';
			$arguments=array(
			                 'nome'   => $titulo,
			                 'id' => $id      
			                );
			$result = $client->__soapCall($function,array('parameters' => $arguments));

			$mensagem= $result->return;
		    setcookie('msg', $mensagem);
		    header('Location: index');
			break;

		case 'excluir':
			$id = $_POST['id'];

			$function = 'excluir';
			$arguments=array(
			                 'id' => $id      
			                );
			$result = $client->__soapCall($function,array('parameters' => $arguments));

			$retorno = serialize($result);
			
			setcookie('obj', $retorno);
			header('Location: index');
			break;

		default:
			$mensagem= "Algo deu errado tente novamente";
			setcookie('msg', $mensagem);
			header('Location: index');
			break;
	}
	
    
}

?>