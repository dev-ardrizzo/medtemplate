
<?php 

require 'classes/banco.php';
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");



$banco->query("SELECT * FROM templates");

$templateHtml = $_POST['templateHtml'];

$banco->query("UPDATE templates SET
  templateHtml = '$templateHtml' WHERE
  templateId = '34'
");

  ?>