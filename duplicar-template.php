
<?php
	session_start();
	require 'classes/banco.php';
	$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");


	$idSessao = $_SESSION['id']; 

	if (isset($_GET['templateId']) && empty($_GET['templateId']) == false) {


		$templateId = addslashes($_GET['templateId']);

		$banco->query("SELECT * FROM templates WHERE templateId = $templateId ");

		foreach ($banco->result() as $dados ){
			$getDuplicateTemplate = $dados["templateHtml"];
		}

	
		$banco->query("SELECT * FROM templates");

		$banco->query("INSERT INTO templates SET
			templateUserId = $idSessao,
			templateHtml = '$getDuplicateTemplate',
			templateTypeAmbience = 'homol'
		");

		header("Location: templates.php");
		


	} 
?>

