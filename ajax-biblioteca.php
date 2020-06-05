<?php 
require 'classes/connect.php';

$templateUserId = $_POST['templateUserId'];

$banco->query("SELECT * FROM images WHERE userId = '$templateUserId' ORDER BY imageId DESC ");

foreach ($banco->result() as $dados ){

	echo "<li class='box-template'><img onclick='copySrcSidebar(event)' src='/app/".$dados['imageSrc']."'/></li>";

}
?>



