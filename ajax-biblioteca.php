
<?php 


	require 'classes/banco.php';
	$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");

	$templateUserId = $_POST['templateUserId'];


	$banco->query("SELECT * FROM images WHERE userId = '$templateUserId' ORDER BY imageId DESC ");

	foreach ($banco->result() as $dados ){

		echo "<li class='box-template'><img onclick='copySrcSidebar(event)' src='/app/".$dados['imageSrc']."'/></li>";

	}


  ?>



