
<?php
session_start();
require 'classes/banco.php';
$banco = new Banco("localhost", "ardrizzodesig_medtemplate", "ardrizzodesig_admin", "Re%Dla=kMwq9");


if(!isset($_SESSION['id']) && !empty($_SESSION['id']) == false ) {
    header("Location: index.php");
} 



$idSessao = $_SESSION['id']; 

$templateId = $_GET["templateId"];
?>
<html>

<head>
  <!-- Google Tag Manager -->
  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  
    <!-- MEDTEPLATE -->
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <!-- FINAL MEDTEPLATE -->


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

<?php require 'customize-template.php'; ?>

<body id="template-default">

<div id="content">


<?php 


$banco->query("SELECT * FROM templates WHERE  templateUserId = '$idSessao' AND templateId = '$templateId'");



foreach ($banco->result() as $dados ){
	echo $dados["templateHtml"];
}

?>
</div>

</body>








<!-- MEDTEPLATE -->
<script id="toggleJS" src="js/toggle.js"></script>
<!-- FINAL MEDTEMPLATE -->
</html>