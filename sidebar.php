
<section id="section__sidebar">
		
	<h1>MEDTEMPLATE</h1>
	<?php 

	$banco->query("SELECT * FROM users WHERE userId = '$idSessao'");

	foreach ($banco->result() as $dados ){
		echo "<p>Bem vindo, ".$dados['userName'].".</p>";
	}

	?>

	<ul>
		<li><a href="templates.php">Templates</a></li>
		<li><a href="biblioteca.php">Biblioteca</a></li>
	</ul>

</section>