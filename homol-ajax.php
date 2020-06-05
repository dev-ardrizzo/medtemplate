
<?php 
// Conexao com o Banco
require 'classes/banco.php';
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Teste - AJAX</title>
  <!-- Ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>



<div id="autoSave">
  
</div>


<div id="content" name="templateHtml">


  <?php 

//  Retorna TEMPLATE EM PHP

  $banco->query("SELECT * FROM templates WHERE templateId = '34'");

  foreach ($banco->result() as $dados ){
    echo $dados["templateHtml"];
  }

  ?>

</div>

</body>

<script>
  
// CONSTRUINDO A FUNCA DO AJAX



$(document).ready(function() {
  function autoSave() {

    var templateHtml = $("#content").html();

    $.ajax({

      url: "connection.php",
      method: "POST",
      data: {templateHtml:templateHtml},
      dataType: "text",
      sucess: function(data) {
        if(data != '') {
          $("#content").val(data);
        }
      }
    });
  }

  setInterval(function(){
    autoSave();
    console.log("saved database")
  }, 1000);

});



</script>


</html>

