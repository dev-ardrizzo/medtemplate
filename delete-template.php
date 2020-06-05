
<?php
require 'classes/connect.php';

if (isset($_GET['templateId']) && empty($_GET['templateId']) == false) {
	
	$templateId = addslashes($_GET['templateId']);

	$banco->query("DELETE FROM templates WHERE templateId = '$templateId'");
	
	header("Location: templates.php");
} 
?>

