
<section id="section__navegationOptions">
 

<?php 


$banco->query("SELECT * FROM templates WHERE  templateUserId = '$idSessao' AND templateId = '$templateId'");

foreach ($banco->result() as $dados ){
    $dbTitle = $dados["templateTitle"];
    $dbAmbiance = $dados["templateTypeAmbience"];
    $dbLinkProd = $dados["templateLinkProd"];
}

?>

<input id="getTemplateTitle" placeholder="Sem nome" name="templateTitle" type="text" value="<?php echo $dbTitle ?>">

<select name="templateTypeAmbience" id="getTemplateTypeAmbience">
  <option value="homol" <?php if($dbAmbiance == "homol" ){ echo ' selected'; }?>>Homologação</option>
  <option value="prod"  <?php if($dbAmbiance == "prod" ){ echo ' selected'; }?>>Produção</option>
</select>

<input id="getTemplateLinkProd" placeholder="Link de producao" name="templateTitle" type="text" value="<?php echo $dbLinkProd ?>">



  <div class="section__row">
    <ul class="section__menu">
      <li class="section__menu--dropdown"><span href="">Arquivo</span>
        <ul>
          <li><span><a href="/app/templates.php">Templates</a></span></li>
          <li><span onclick="contentExport()">Exportar</span></li>
        </ul>
      </li>

      <li class="section__menu--dropdown"><span href="">Editar</span>
        <ul>
          <li><span onclick="previousHistory()">Desfazer</span></li>
          <li><span onclick="nextHistory()">Refazer</span></li>
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
          <li><button onclick="addComponent('containerImg')"><img src="imgs/image.svg" alt=""></button></li>
          <li><button onclick="addComponent('listaVideo')"><img src="imgs/youtube.svg" alt=""></button></li>
        </ul>
      </li>

      <li id="status"></li>

    </ul>
  </div>

  <hr>

  <div class="section__row">
    <ul class="section__menu">
		<li><button id="section__btn--bold" onclick="addBold()"><b>B</b></button></li>
		<li><button id="section__btn--italico" onclick="addItalic()"><i>I</i></button></li>
		<li><button id="section__btn--sublinhado" onclick="addUnderline()"><u>U</u></button></li>
    <li class="section__menu--dropdown">
    <div class="pallete" style=" border: 1px solid #0000002b; background: #e0e0e0; margin-top:6px;">
      <span id="currentColor" class="currentColor" style="background: white"></span>
    </div>
        <ul>
        <div class="pallete">
          <div class="row">
            <span class="color" style="background: #cecece"></span>
            <span class="color" style="background: white"></span>
            <span class="color" style="background: #00bcd4"></span>
            <span class="color" style="background: #ff5a5a"></span>
          </div>
        </div>
        </ul>
      </li>

    <li class="section__menu--dropdown">
    <div class="pallete">
      <span style="font-size: 22px !important; font-family: serif;">T</span>
    </div>
        <ul>
          <div class="pallete">
            <div class="column">
              <span class="size" style="font-size: 36px">Large</span>
              <span class="size" style="font-size: 28px">Medium</span>
              <span class="size" style="font-size: 20px">Paragraph</span>
              <span class="size" style="font-size: 12px">Small</span>
            </div>
          </div>
        </ul>
      </li>

		<li class="separador"></li>
		<li><button id="section__btn--justify" onclick="addJustify()"><img src="imgs/icone-justify.svg" alt=""></button></li>
		<li><button id="section__btn--justifyCenter" onclick="addJustifyCenter()"><img src="imgs/align.svg" alt=""></button></li>
    <li><button id="section__btn--bullet-list" onclick="addListBullet()" style="width: 40px"><img src="imgs/bullet-list.svg" alt=""></button></li>
		<li class="separador"></li>
		<li><button id="deleteElement" onclick="deleteElement()"><img src="imgs/icone-trash.svg" alt=""></button></li>
		<li><button id="deleteElement" onclick="duplicateElement()"><img src="imgs/icone-duplicate.svg" alt=""></button></li>
		<li><button id="moveUp"><img src="imgs/icone-up.svg" alt=""></button></li>
		<li><button id="moveDown"><img src="imgs/icone-down.svg" alt=""></button></li>
		<li class="separador"></li>
		<li><a target="_blank" href="visualizacao.php?templateId=<?php echo $templateId ?>"><button id="changeToMobile"><img src="imgs/visibility.svg" alt="" ></button></a></li>
    <li class="section__menu--dropdown"><span href=""><button id="changeToMobile"><img src="imgs/qr-code.svg" alt=""></button></span>
        <ul>
          <li style="flex-direction: column; text-align: center;"><span><a href="/"><iframe src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=http://ardrizzodesign.com.br/app/visualizacao.php?templateId=<?php echo $templateId ?>" width="150" height="150" frameborder="0"></iframe></a></span></li>
        </ul>
    </li>
    <li class="separador"></li>
    <li><button id="myBtn" onclick="openSidebar()"><img src="imgs/icone-add-image.svg" alt=""></button></li>
    </ul>
  </div>

</section>

