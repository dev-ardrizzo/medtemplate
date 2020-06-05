
<?php 
require 'classes/banco.php';
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");


$banco->query("SELECT * FROM templates");

$templateUserId = $_POST['templateUserId'];
$templateHtml = $_POST['templateHtml'];
$templateId = $_POST['templateId'];

$banco->query("UPDATE templates SET
  templateUserId = $templateUserId,
  templateHtml = '$templateHtml' WHERE
  templateId = '$templateId'
");




  ?>