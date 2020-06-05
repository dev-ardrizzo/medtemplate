
<section id="section__navegationOptions">
 
  <div class="section__row">
     <ul class="section__menu">
       <li class="section__menu--dropdown">
        <span>Versão <?php echo $templateId; ?> do template.</span>
        <ul>
          
        <?php 

        $banco->query("SELECT * FROM templates WHERE templateUserId = '$idSessao' ORDER BY templateId DESC");
        foreach ($banco->result() as $dados ){
          echo "<li><span><a href='template.php?templateId=".$dados['templateId']."'>Versão ".$dados['templateId']."</a></span></li>";
        }

        ?>

        </ul>
      </li>


     </ul>
  </div>
  <div class="section__row">
    <ul class="section__menu">
        <li class="section__menu--dropdown"><span href="">Arquivo</span>
        <ul>
          <li><span><a href="/app/templates.php">Templates</a></span></li>
          <li><span onclick="contentExport()">Exportar</span></li>
        </ul>
      </li>
      <li class="section__menu--dropdown"><span href="">Inserir</span>
        <ul>
          <li><span onclick="addComponent('h2')">Descrição</span></li>
          <li><span onclick="addComponent('h3')">Titulo Seção</span></li>
          <li><span onclick="addComponent('p')">Paragrafo</span></li>
          <li><span onclick="addComponent('hr')">Separador</span></li>
          <li><span onclick="addComponent('FAQ')">FAQ</span></li>
          <li><button onclick="addComponent('listaTextoImg')"><img src="imgs/icone-justify.svg" alt=""><img src="imgs/icone-smartphone.svg" alt=""></button></li>
          <li><button onclick="addComponent('listaImgTexto')"><img src="imgs/icone-smartphone.svg" alt=""><img src="imgs/icone-justify.svg" alt=""></button></li>
        </ul>
      </li>
    </ul>
  </div>

  <hr>

  <div class="section__row">
    <ul class="section__menu">
    <li><button id="section__btn--bold" onclick="addBold()"><b>B</b></button></li>
    <li><button id="section__btn--italico" onclick="addItalic()"><i>I</i></button></li>
    <li><button id="section__btn--sublinhado" onclick="addUnderline()"><u>U</u></button></li>
    <li class="separador"></li>
    <li><button id="section__btn--justify" onclick="addJustify()"><img src="imgs/icone-justify.svg" alt=""></button></li>
    <li><button id="section__btn--justifyCenter" onclick="addJustifyCenter()"><img src="imgs/align.svg" alt=""></button></li>
    <li class="separador"></li>
    <li><button id="deleteElement" onclick="deleteElement()"><img src="imgs/icone-trash.svg" alt=""></button></li>
    <li><button id="deleteElement" onclick="duplicateElement()"><img src="imgs/icone-duplicate.svg" alt=""></button></li>
    <li><button id="moveUp"><img src="imgs/icone-up.svg" alt=""></button></li>
    <li><button id="moveDown"><img src="imgs/icone-down.svg" alt=""></button></li>
    <li class="separador"></li>
    <li><a target="_blank" href="visualizacao.php?templateId=<?php echo $templateId ?>"><button id="changeToMobile"><img src="imgs/visibility.svg" alt="" ></button></a></li>
    <li class="section__menu--dropdown"><span href=""><button id="changeToMobile"><img src="imgs/qr-code.svg" alt=""></button></span>
        <ul>
          <li style="flex-direction: column; text-align: center;"><span><a href="/"><iframe src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://ardrizzodesign.com.br/app/visualizacao.php?templateId=<?php echo $templateId ?>" width="150" height="150" frameborder="0"></iframe></a></span><small style="font-size: 13px; line-height: 1.3; margin-top: 5px; font-weight: bold;">Salve o arquivo antes de escanear o QRCODE</small></li>
        </ul>
    </li>
    <li class="separador"></li>
    <li><button id="myBtn"><img src="imgs/icone-add-image.svg" alt=""></button>
         <li class="separador"></li>
          <li><button onclick="previousHistory()" >Anterior</button></li>
          <li><button onclick="nextHistory()" >Proximo</button></li>



    </li>
    </ul>
  </div>

</section>

