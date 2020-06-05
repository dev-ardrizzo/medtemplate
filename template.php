
<?php

require 'classes/connect.php';

if(!isset($_SESSION['id']) && !empty($_SESSION['id']) == false ) {
    header("Location: index.php");
} 



$idSessao = $_SESSION['id']; 
$templateId = $_GET["templateId"];

    
$banco->query("SELECT * FROM templates WHERE templateId = '$templateId' ");

foreach ($banco->result() as $dados ){ 

  $getTemplateUserId = $dados['templateUserId'];

}

if($idSessao !==  $getTemplateUserId  ) {
  $message = "Ops! Esse template nao pertence a voce :')";
  die($message);
} 


?>




<html>

<head>
  <!-- Google Tag Manager -->
  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- Ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  
    <!-- MEDTEPLATE -->
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <!-- FINAL MEDTEPLATE -->

    <title>Nome Template</title>




    <style>
      


       p.upfile {
            color: #59b960;
            font-size: 14px;
            margin: 10px 0 0 0;
            border: 1px solid #59b960;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 5px;
        }

       p.sucess {
            color: #ffffff;
            font-size: 14px;
            margin: 10px 0 0 0;
            background: #59b960;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 5px;
        }





     #biblioteca {
        z-index: 9999;
        width: 15vw;
        position: fixed;
        height: calc(100vh - 161px);
        background: white;
        top: 161px;
        right: 0;
        overflow-y: scroll;
     }

     #biblioteca li img {
         height: 200px;
        width: 100%;
        object-fit: cover;
    }

     #biblioteca li {
    background: white;
        padding: 10px;
        margin-right: 10px;
        box-shadow: 1px 1px 41px 1px #00000033;
        border-radius: 5px;
        margin: 10px !important;
        cursor: pointer;
    }
  
    #uploadBiblioteca {
        background: white;
        padding: 20px;
        position: fixed;
        width: inherit;
        box-shadow: 1px 1px 41px 1px #0000005e; 
    }
    
#biblioteca h4 {
    color: #3c3c3c;
    margin: 0;
    font-weight: bold;
    text-align: center;
    font-size: 22px;
    margin-bottom: 0;
}

    #biblioteca hr {
      margin: 10px;
    }

    span#fecharSidebarBiblioteca {
        background: white;
        padding: 10px;
        display: flex;
        width: 40px;
        height: 40px;
        position: fixed;
        right: 15vw;
        top: 177px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        cursor: pointer;
        transition: 1s ease;
    }

    #biblioteca form {
      margin: 0;
    }

  ul#imgsBibliotecaSidebar {
    margin-top: 140px;
}



    span#fecharSidebarBiblioteca:hover {
      background: lightgray;
      transition: 1s ease;
    }


    span#fecharSidebarBiblioteca img {
        max-width: 20px;
    }




#hotspot-left,
#hotspot-right {
  height: 100vh;
  width: 28vw;
  position:fixed;
}

#hotspot-left {
  left: 0;
  top: 0;
}

#hotspot-right {
  right: 0;
  top: 0;
}


    </style>






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

<?php require 'modal-biblioteca.php' ?>

<?php require 'customize-template.php'; ?>

<body id="template-default">

<div id="getIdSessao" name="templateUserId" style="display: none"><?php echo $idSessao; ?></div>
<div id="getTemplateId" name="templateId" style="display: none"><?php echo $templateId; ?></div>
<!-- <input id="getTemplateTitle" name="templateTitle" type="text" value="Nome do template"> -->

<div id="hotspot-left"></div>

<div id="content" name="templateHtml">


<?php 


$banco->query("SELECT * FROM templates WHERE  templateUserId = '$idSessao' AND templateId = '$templateId'");



foreach ($banco->result() as $dados ){
    echo $dados["templateHtml"];
}

?>
</div>



<div id="biblioteca"  style="display: none">

  <div id="uploadBiblioteca">
    
    <h4>Biblioteca</h4>
    <hr>

    <form id="uploadForm">

      <input id="fileUpload" type="file" name="frame" />
      <input id="submitUpload" type="submit" value="Enviar" name="submit" />

    </form>


  <div id="message"></div>
  
  </div>

    <span id="fecharSidebarBiblioteca" onclick="disableSidebar()"><img src="imgs/cancel.svg" alt=""></span>

    <ul id="imgsBibliotecaSidebar">
        
      <?php 
  
      $banco->query("SELECT * FROM images WHERE userId = '$idSessao' ORDER BY imageId DESC ");
  
      foreach ($banco->result() as $dados ){
  
      echo "<li  class='box-template'><img onclick='copySrcSidebar(event)' src='/app/".$dados['imageSrc']."'/></li>";
  
      }
  
      ?>
    </ul>
         
  </div>

<div id="hotspot-right"></div>

</body>



<script>
  



 var submitUpload = document.getElementById("submitUpload");


 var inputUpload = document.getElementById("fileUpload");
 var sendMessage = document.getElementById("message");


inputUpload.addEventListener("change",checkUpload);
submitUpload.addEventListener("click",removeMessageUpload);


function checkUpload() {

  if(inputUpload.files.length > 0 ){
      sendMessage.innerHTML = "<p class='upfile'>Arquivo selecionado!</p>";
  } 

}


function removeMessageUpload() {

  setTimeout(function(){

    let directoryTagSucess = document.getElementById("tagSucess");
    directoryTagSucess.remove();
    console.log("removeu message");
  }, 8000);

}




var getUrlImgs;

function changeImgSidebar() {

  let getAllClassesSelected = document.querySelectorAll(".selected");

  for (i = 0; i < getAllClassesSelected.length; i++) {
    
    getAllClassesSelected[i].src = getUrlImgs;


  }

}



function copySrcSidebar(event) {

  getUrlImgs = event.target.src;
  console.log(getUrlImgs);


  changeImgSidebar();

}

const diretorySidebar = document.getElementById("biblioteca");

function disableSidebar() {
  diretorySidebar.style.display = "none";
}


function openSidebar() {
  diretorySidebar.style.display = "block";
}




var getAllImagesTypes = document.getElementById("content").querySelectorAll("img");

for (i = 0; i < getAllImagesTypes.length; i++) {
    getAllImagesTypes[i].addEventListener("click", openSidebar);
}






</script>


<script>
  
// CONSTRUINDO A FUNC AJAX
$(document).ready(function() {
  function autoSave() {

    var templateTitle = $("#getTemplateTitle").val();
    var templateTypeAmbience = $("#getTemplateTypeAmbience option:selected").val();
    var templateLinkProd = $("#getTemplateLinkProd").val();
    var templateUserId = $("#getIdSessao").html(); 
    var templateHtml = $("#content").html();
    var templateId = $("#getTemplateId").html();

    $.ajax({

      url: "ajax-template.php",
      method: "POST",
      data: { templateTitle:templateTitle, templateTypeAmbience:templateTypeAmbience, templateLinkProd:templateLinkProd, templateUserId:templateUserId, templateHtml:templateHtml, templateId:templateId},
      dataType: "text",
      sucess: function(data) {
        if(data != '') {
          // $("#getTemplateTitle").val("Valor retornado");
          // alert(data);
        }
      }
    });
  }

  setInterval(function(){
    autoSave();
    console.log("saved database")
  }, 1000);

});


</script>



<script>
  
$(document).ready(function() {
 
  function refrash() {

    var templateUserId = $("#getIdSessao").html(); 

    $("#imgsBibliotecaSidebar").load("ajax-biblioteca.php", {
      templateUserId: templateUserId
    });


  }



  setInterval(function(){
    refrash();
    console.log("refrash content")
  }, 1000);   

});


</script>

<script>


// ----------------------------------------------
// ---------------- ESTAMOS AQUI ----------------
// ----------------------------------------------




$("#uploadForm").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
        url: "ajax-send-file.php",
        type: "POST",
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(data){
            $("#message").html(data);
            // console.log(data);
        }           
    });
}));


</script>




<!-- MEDTEPLATE -->
<script id='toggleJS' src='js/toggle.js'></script>
<!-- FINAL MEDTEMPLATE -->
