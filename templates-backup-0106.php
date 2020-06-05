
<?php
session_start();
require 'classes/banco.php';
// $banco = new Banco("localhost", "ardrizzodesig_medtemplate", "ardrizzodesig_admin", "Re%Dla=kMwq9");
$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");


	if(!isset($_SESSION['id']) && !empty($_SESSION['id']) == false ) {
		header("Location: index.php");
	} 

	$idSessao = $_SESSION['id']; 

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MEDTemplate Beta</title>
	<!-- MEDTEPLATE -->
    <!-- <link rel="stylesheet" type="text/css" href="css/css.css"> -->
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <!-- FINAL MEDTEPLATE -->

	<!-- MEDTEPLATE -->
	<script src="js/core-js.js"></script>
	<!-- FINAL MEDTEMPLATE -->

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

    
</head>
<body class="coreBody">

<?php //require 'sidebar.php' ?>


<style>
	

#section__home {
	margin-top: 170px;
}


</style>


<section id="section__home">


	<div class="container" style="overflow: hidden;">
		<h1>MEDTEMPLATE</h1>

		<h3>Informativo</h3>		
	</div>
	
	<div class="container">

		<div class="section__row">


			<div class="section__column new">
				<form method="POST">
					<input type="submit" value="Adicionar versão" name="duplicarTemplate">
				</form>
			</div>


		<?php 

		$banco->query("SELECT * FROM templates WHERE templateUserId = '$idSessao' ORDER BY templateId DESC");

		foreach ($banco->result() as $dados ){

			echo "<div class='section__column'>";
			echo "<a href='template.php?templateId=".$dados['templateId']."'>";
			echo "<div class='box-template'>Versão<br><b>".$dados['templateId']."</b><br>".$dados['templateTitle']."</div>";
			echo "</a>";
			echo "</div>";

		}

		?>

		


		</div>
	</div>



		<?php 

		$banco->query("SELECT * FROM templates WHERE templateId = '50'");

		foreach ($banco->result() as $dados ){
			$getDefaultTemplate = $dados["templateHtml"];
		}

		?>



		<?php
				
			if (isset($_POST["duplicarTemplate"]) && empty($_POST["duplicarTemplate"]) == false ) {
				
				$banco->query("SELECT * FROM templates");

				$banco->query("INSERT INTO templates SET
					templateUserId = $idSessao,
					templateHtml = '$getDefaultTemplate'
				");

				header("Location: templates.php");
			}
		?>


</section>
	
</body>
</html>


