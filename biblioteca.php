
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

	<!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

<?php require 'sidebar.php' ?>

<section id="section__home">

<div id="getIdSessao" name="templateUserId" style="display: none"><?php echo $idSessao; ?></div>

	<div class="container" style="overflow: hidden;">
		<h3>Blibloteca</h3>		
	</div>
	
	<div class="container">


		<div id="content" class="section__row">
			<?php 
			
			$banco->query("SELECT * FROM images WHERE userId = '$idSessao' ORDER BY imageId DESC");
			
			foreach ($banco->result() as $dados ){
			
				echo "<div class='section__itemBiblioteca'>";
				echo "<div class='box-template'><img src='/app/".$dados['imageSrc']."'/></div>";
				echo "</div>";
			
			}
			
			?>
	
			</div>


		<div class="section__row">

			<form method="post" enctype="multipart/form-data">
			    Selecione a imagem:
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input id="btnFile" type="submit" value="Upload Image" name="submit">
			</form>



			<?php
			$randomNumber = rand();
			$date = date("Y-d-m-h-i-s");
			$target_dir = "uploads/";
			$target_file = $target_dir . $date . "-" . $randomNumber . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}
				// Check if file already exists
				if (file_exists($target_file)) {
				    echo "Sorry, file already exists.";
				    $uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 500000) {
				    echo "Sorry, your file is too large.";
				    $uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
				    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				    $uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				    echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

						$banco->query("SELECT * FROM images");

						$banco->query("INSERT INTO images SET
							userId = '$idSessao',
							imageName = '$target_file',
							imageSrc =  '$target_file'
						");

				    } else {
				        echo "Sorry, there was an error uploading your file.";
				    }
				}
			
			?>


		</div>
	</div>

</section>
	


<script>
	

// CONSTRUINDO A FUNC AJAX
$(document).ready(function() {
 
	function refrash() {

		var templateUserId = $("#getIdSessao").html(); 

		$("#content").load("ajax-biblioteca.php", {
			templateUserId: templateUserId
		});

	}



  setInterval(function(){
    refrash();
    console.log("refrash content")
  }, 1000);  	

});


</script>



</body>
</html>


