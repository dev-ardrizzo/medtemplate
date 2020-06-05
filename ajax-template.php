
<?php 
require 'classes/banco.php';
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");

$banco->query("SELECT * FROM templates");

$templateUserId = $_POST['templateUserId'];
$templateTitle = $_POST['templateTitle'];
$templateHtml = $_POST['templateHtml'];
$templateTypeAmbience = $_POST['templateTypeAmbience'];
$templateLinkProd = $_POST['templateLinkProd'];
$templateId = $_POST['templateId'];

$banco->query("UPDATE templates SET
  templateUserId = '$templateUserId',
  templateTitle = '$templateTitle',
  templateHtml = '$templateHtml',
  templateTypeAmbience = '$templateTypeAmbience',
  templateLinkProd = '$templateLinkProd' WHERE
  templateId = '$templateId'
");


  ?>