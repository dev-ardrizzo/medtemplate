<?php
require 'classes/connect.php';

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
    <link rel="stylesheet" type="text/css" href="css/core.css">
	<script src="js/core-js.js"></script>
</head>
<body class="coreBody">

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

				$getTemplateUserId = $dados['templateUserId'];

				echo "<div class='section__column'>";
				
				 if($idSessao == $dados['templateUserId']) {
					echo "<div class='tag-you'>";
					echo("Feito por você");
					echo "</div>";
				} else {
					$banco->query("SELECT * FROM users WHERE userId = '$getTemplateUserId' ");
					foreach ($banco->result() as $dadosAuthor ){
						$authorTemplate = $dadosAuthor['userName'];
					}
					echo "<div class='tag-you'>";
					echo("Feito por ").$authorTemplate ;
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


