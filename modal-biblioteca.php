
<div id="myModal" class="modal">
	<div class="modal-white">
		
		<span class="close">&times;</span>
		    
			<h1>Biblioteca</h1>
		
		    <ul id="imgsBiblioteca">
		      
		    <?php 
		
		    $banco->query("SELECT * FROM images WHERE userId = '$idSessao'");
		
		    foreach ($banco->result() as $dados ){
		
		    echo "<li onclick='copySrc()' class='box-template'><img src='/app/".$dados['imageSrc']."'/></li>";
		
		    }
		
		    ?>
		    </ul>


	
			<form method="post" enctype="multipart/form-data">
			    Select image to upload:
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Upload Image" name="submit">
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
