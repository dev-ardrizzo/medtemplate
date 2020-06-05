
<?php
session_start();
require 'classes/banco.php';
$banco =  new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");

	$idSessao = $_SESSION['id']; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Templates</title>
</head>
<body>

	<?php 

	$banco->query("SELECT * FROM templates WHERE templateUserId = '$idSessao'");


		foreach ($banco->result() as $dados ){
			echo $dados["templateHtml"];
		}



	 ?>

	<h1>vc esta na pagina de templates</h1>
	
</body>
</html>