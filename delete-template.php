
<?php
	session_start();
	require 'classes/banco.php';
	$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");


	if (isset($_GET['templateId']) && empty($_GET['templateId']) == false) {
		
		$templateId = addslashes($_GET['templateId']);

		$banco->query("DELETE FROM templates WHERE templateId = '$templateId'");
		
		header("Location: templates.php");
	} 
?>

