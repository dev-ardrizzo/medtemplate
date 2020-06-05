<?php
require 'classes/connect.php';

if(isset($_SESSION['id']) == true ) {
	header("Location: templates.php");
	$idSessao = $_SESSION['id']; 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MEDTemplate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<body>


<style>
	
body {
    font-family: 'Roboto', sans-serif;
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: #f9f9f9;
    color: #565656;
    margin: 0;
    padding: 0;
}	

h1 {
	padding: 20px;
}

#login {
	padding: 15px;
    box-shadow: 0px 0px 10px 3px #00000010;
	background: white;
}

#login input {
	padding: 10px;
    border: 1px solid #00000010;
    display: flex;
    margin: 10px 0;
    width: -webkit-fill-available;
}

#login input[type="submit"] {
	width: initial;
}


</style>


<form id="login" method="POST">

	<h1>MEDTemplate</h1>

	<input type="text" name="userEmail" placeholder="Digite seu e-mail" />
	<input type="password" name="userPassword" placeholder="Digite sua senha" />

	<input type="submit" value="Entrar">

<?php 

if(isset($_POST['userEmail']) && empty($_POST['userEmail']) == false) {

	$userEmail = addslashes($_POST['userEmail']);
	$userPassword = addslashes($_POST['userPassword']);

	$banco->query("SELECT * FROM users WHERE userEmail = '$userEmail' and userPassword = '$userPassword'");


	if ($banco->numRows() > 0){


		foreach ($banco->result() as $dados ){
			$_SESSION["id"] = $dados["userId"];
		}

		echo "<script> window.location.replace('templates.php')</script>";

	} else {
		echo "O usuário não está correto :(";
	}

	}
?>


</form>





	
</body>
</html>