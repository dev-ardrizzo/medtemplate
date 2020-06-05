
<?php
session_start();
require 'classes/banco.php';
// $banco = new Banco("localhost", "ardrizzodesig_medtemplate", "ardrizzodesig_admin", "Re%Dla=kMwq9");
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");

$idSessao = $_SESSION['id']; 

$templateId = $_GET["templateId"];
?>
<html>

<head>
  <!-- Google Tag Manager -->
  
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
    <!-- Hotjar Tracking Code for http://ardrizzodesign.com.br/ -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:1790355,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>


    <title>Nome Template</title>

</head>


<body id="template-default">

<div id="content">
<?php 


$banco->query("SELECT * FROM templates WHERE templateId = '$templateId'");

foreach ($banco->result() as $dados ){
	echo $dados["templateHtml"];
}

?>
</div>

</body>




<script>

function contentEditable(mode) {

    // Adiciona todos os elementos P(Paragrafos) em uma variavel
    var getAllEditableElements = document.querySelectorAll(".column, p, h1, h2, h3, .datas__columns, .accordion-container, .lista, td, th, tr, .row");
    // Mostra no console
    console.log(getAllEditableElements);


    for (i = 0; i < getAllEditableElements.length; i++) {
      getAllEditableElements[i].setAttribute("contenteditable", mode);
    }

    console.log("Todos contentEditable excluidos.")   
}

contentEditable("false");



</script>



<!-- MEDTEPLATE -->
<script src="js/accordion.js"></script>
<!-- FINAL MEDTEMPLATE -->
</html>