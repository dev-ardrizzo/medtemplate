
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
	</div>
	


	<div class="container">

		<h3>Produção</h3>
		<div class="section__row">

			<?php 



			$banco->query("SELECT * FROM templates WHERE templateTypeAmbience = 'prod' ");

			foreach ($banco->result() as $dados ){

				echo "<div class='section__column'>";



				
				 if($idSessao == $dados['templateUserId']) {
					echo "<div class='tag-you'>";
					echo("Feito por você");
					echo "</div>";
				}
				

				if($idSessao !== $dados['templateUserId'] ) {
					echo "<a href='visualizacao.php?templateId=".$dados['templateId']."'>";		
				} else {
					echo "<a href='template.php?templateId=".$dados['templateId']."'>";		
				}

				echo "<div class='box-template'><b>";

				if (!empty($dados['templateTitle'])) {
					echo $dados['templateTitle'];
				} else {
					echo $dados['templateId'];
					echo "<br><small>Sem nome</small>";
				}

				echo "</b></div>";
				echo "</a>";
				echo "<div class='btn-options'>";
				echo "<a class='btn-excluir' href='duplicar-template.php?templateId=".$dados['templateId']."'>Duplicar</a>";
				echo "<a class='btn-excluir' target='_blank' href='visualizacao.php?templateId=".$dados['templateId']."'><img src='imgs/visibility.svg'></a>";
				
				if(!empty($dados['templateLinkProd'])) {
					echo "<a class='btn-excluir' target='_blank' href='".$dados['templateLinkProd']."'><img src='imgs/icon-link.svg'></a>";
				}

				echo "</div>";



				echo "</div>";


			}

			?>
		</div>
	</div>

	<div class="container">

		<h3>Homologação</h3>

		<div class="section__row">

			<div class="section__column new">
				<form method="POST">
					<input type="submit" value="Criar template" name="duplicarTemplate">
				</form>
			</div>

			<?php 

			$banco->query("SELECT * FROM templates WHERE templateUserId = '$idSessao' AND templateTypeAmbience = 'homol' ORDER BY templateId DESC");

			foreach ($banco->result() as $dados ){


				echo "<div class='section__column'>";
				echo "<a href='template.php?templateId=".$dados['templateId']."'>";
				echo "<div class='box-template'><b>";

				if (!empty($dados['templateTitle'])) {
					echo $dados['templateTitle'];
				} else {
					echo $dados['templateId'];
					echo "<br><small>Sem nome</small>";
				}

				echo "</b></div>";
				echo "</a>";
				echo "<div class='btn-options'>";
				echo "<a class='btn-excluir' href='duplicar-template.php?templateId=".$dados['templateId']."'>Duplicar</a>";
				echo "<a class='btn-excluir' href='delete-template.php?templateId=".$dados['templateId']."'>Excluir</a>";
				echo "</div>";
				echo "</div>";

			}

			?>
		</div>
	</div>



		<?php 

		$banco->query("SELECT * FROM templates WHERE templateId = '1030' AND templateTypeAmbience = 'prod'");

		foreach ($banco->result() as $dados ){
			$getDefaultTemplate = $dados["templateHtml"];
		}

		?>



		<?php
				
			if (isset($_POST["duplicarTemplate"]) && empty($_POST["duplicarTemplate"]) == false ) {
				
				$banco->query("SELECT * FROM templates");

				$banco->query("INSERT INTO templates SET
					templateUserId = $idSessao,
					templateHtml = '$getDefaultTemplate',
					templateTypeAmbience = 'homol'
				");

				header("Location: templates.php");
			}
		?>


</section>
	
</body>
</html>


