<?php 





			session_start();
			require 'classes/banco.php';
			$banco = new Banco("medtemplate.mysql.dbaas.com.br", "medtemplate", "medtemplate", "KsY9#*SvJZuXR");
			// var_dump($_FILES);
			// var_dump($_POST);


			$idSessao = $_SESSION['id']; 


			$randomNumber = rand();
			$date = date("Y-d-m-h-i-s");
			$target_dir = "uploads/";
			$target_file = $target_dir . $date . "-" . $randomNumber . basename($_FILES["frame"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


			if(isset($_FILES["frame"])){
			    $name = $_FILES["frame"]["name"];
			    $tmp_name = $_FILES['frame']['tmp_name'];

			    if (isset ($name)) {
			        if (!empty($name)) {

			            if  (move_uploaded_file($tmp_name, $target_file)){

							$banco->query("SELECT * FROM images");

							$banco->query("INSERT INTO images SET
								userId = '$idSessao',
								imageName = '$target_file',
								imageSrc =  '$target_file'
							");

							echo "<p id='tagSucess' class='sucess'>Arquivo enviado com sucesso!</p>";

			            }

			        } else {
			            echo 'Por favor, mude o arquivo.';
			        }
			    }
			    else{
			        echo "Nao existe um nome.";
			    }
			}
			else echo "Sem arquivo.";



?>