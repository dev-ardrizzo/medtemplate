



// -----------------
// --- VARIAVEIS ---
// -----------------


// Adiciona em uma variavel o local aonde sera adicionado o conteudo.
var diretoryContent = document.getElementById("content");


// Adiciona todos os elementos P(Paragrafos) em uma variavel
var getAllEditableElements = diretoryContent.querySelectorAll(".column, p, h1, h2, h3, .datas__columns, .accordion-container, .lista, td, th, tr, .row");


for (i = 0; i < getAllEditableElements.length; i++) {
  getAllEditableElements[i].removeAttribute("contenteditable");
}





// Ultimo paragrado acionado;
var dirCurrentParagraph;
var dirCurrentParagraphUI = document.getElementById("currentColor");

let getAllColorsPallete = document.querySelectorAll(".color");
let getAllSizesPallete = document.querySelectorAll(".size");


for (i = 0; i < getAllColorsPallete.length; i++) {
  getAllColorsPallete[i].addEventListener("click", changeColorPallete);
}

for (i = 0; i < getAllSizesPallete.length; i++) {
  getAllSizesPallete[i].addEventListener("click", changeSizesPallete);
}


function changeColorPallete(event) {
  let itemTargetColorPallete = event.target;
  let getColor = itemTargetColorPallete.style.background;

  dirCurrentParagraph.style.color = getColor;
  dirCurrentParagraphUI.style.background = getColor;
  
}


function changeSizesPallete(event) {
  let itemTargetColorPallete = event.target;
  let getSize = itemTargetColorPallete.style.fontSize;

  dirCurrentParagraph.style.fontSize = getSize;
  dirCurrentParagraphUI.style.fontSize = getSize;
  
}





function status() {

	let diretoryStatus = document.getElementById("status");

	if(navigator.onLine){
	
		diretoryStatus.innerHTML = "<u>Online, todas as alterações foram salvas.</u>";

	} else {
		diretoryStatus.innerHTML = "<u>Online, suas alterações não foram sincronizadas.</u>";
	}

	console.log("rodando status")

}

setInterval(function(){
	status();
}, 1000);





function addListBullet() {
	// Seleciona todas as clesses SELECTED
	let getAllClassesSelected = document.querySelectorAll(".selected");



	// Adiciona a classe que contem o bullet
	for (i = 0; i < getAllClassesSelected.length; i++) {

		if(getAllClassesSelected[i].classList.contains("lista--bullet")) {
			getAllClassesSelected[i].classList.remove("lista--bullet")
		} else {
			getAllClassesSelected[i].classList.add("lista--bullet");
		}

	}	
}










// -------------------------------------------------
// -------------- ELEMENTOS EDITAVEIS --------------
// -------------------------------------------------
function removeAllSelects() {
	// Seleciona todas as clesses SELECTED
	let getAllClassesSelected = document.querySelectorAll(".selected");

	// REMOVE TODAS AS CLASSES QUE TEM SELECTED
	for (i = 0; i < getAllClassesSelected.length; i++) {
	getAllClassesSelected[i].classList.remove("selected");
	getAllClassesSelected[i].removeAttribute("contenteditable");
	}
}

removeAllSelects();


// Adicioana a funcao de click do getTarget no conteudo
diretoryContent.addEventListener("click", addSelect);
diretoryContent.addEventListener("contextmenu", removeSelect);

document.getElementById("hotspot-left").addEventListener("dblclick", removeAllSelects);
document.getElementById("hotspot-right").addEventListener("dblclick", removeAllSelects);



 function addSelect(event) {

   // removeAllSelects();
   let itemTarget =  event.target;

   

   // ----------------------------------   
   // --------- BLOCK ELEMENTS ---------
   // ---------------------------------- 
   
   if(itemTarget.className == "column" || itemTarget.className == "row" || itemTarget.id == "content"  ) {
     console.log("NÃO É POSSIVE SElECIONAR ESSE TIPO DE ELEMENTO");
     return;
   }
    // ---------------------------------   


   if(itemTarget.classList.contains("selected")) {
     console.log("ja esta selecionado");
   } else {
     removeAllSelects();
   }


   // --------------------------------------------   
   // --------- Se for do tipo paragrafo ---------
   // --------------------------------------------
   if(itemTarget.tagName == "P" || itemTarget.tagName == "B" || itemTarget.tagName == "H2") {
     dirCurrentParagraph = itemTarget;
     dirCurrentParagraphUI.style.background = dirCurrentParagraph.style.color;
     
     console.log("Adicionado a variavel");
   }
   // --------- Fim: tipo paragrafo ---------


   // ----------------------------------------   
   // --------- Se for do tipo video ---------
   // ---------------------------------------- 
   
   if(itemTarget.className == "iframe__capsule") {
      
     let url = prompt("Insira o link do video", "");
   
     if (url == null || url == "") {
       console.log("Acao foi cancelada");
       return;
     }  
     
     let iframe = document.createElement("iframe");

    // Remove todos os filhos anteriores
     while (itemTarget.firstChild) {
      itemTarget.removeChild(itemTarget.firstChild);
    }
     
     iframe.setAttribute("src", url);
     iframe.setAttribute("width", "100%");
     iframe.setAttribute("height", "100%");
     
     itemTarget.appendChild(iframe);
  
   }
   // --------- Fim: tipo video ---------




   itemTarget.classList.add("selected");
   itemTarget.setAttribute("contenteditable", "true");
  
 }


 function removeSelect(event) {
   // event.preventDefault();
   let itemTarget =  event.target;
   itemTarget.classList.remove("selected");
   itemTarget.removeAttribute("contenteditable");
  
 }








// Cria no body o JS
function addCore() {
	var createJSCore = document.createElement('script');
	createJSCore.setAttribute('src', "js/core-js.js");
	createJSCore.setAttribute('id', "coreJS");
	document.body.appendChild(createJSCore);
}



// Adiciona o atributo de edicao a todos os paragrafos.
function contentEditable(mode) {

	// Adiciona todos os elementos P(Paragrafos) em uma variavel
	var getAllEditableElements = document.querySelectorAll(".column, p, h1, h2, h3, .datas__columns, .accordion-container, .lista, td, th, tr, .row");
	// Mostra no console
	console.log(getAllEditableElements);


	for (i = 0; i < getAllEditableElements.length; i++) {
	  getAllEditableElements[i].setAttribute("contenteditable", mode);
	}	
}

//contentEditable("true");



function modeEditor(mode) {
	var getEditorElement = document.querySelectorAll("#section__navegationOptions");

	for (i = 0; i < getEditorElement.length; i++) {
	  getEditorElement[i].style.display = mode;
	}
}







// ----------------------------------------------------------------------------
// ---------------------------------- Editor ----------------------------------
// ----------------------------------------------------------------------------

// Adiciona Bold
function addBold() {
	document.execCommand('bold');
}

// Adiciona Italico
function addItalic() {
	document.execCommand('italic');  		
}

// Adiciona Underline
function addUnderline() {
	document.execCommand('underline');  			
}




// Adiciona Center
function addJustifyCenter() {
	document.execCommand('justifyCenter');  		
}

function addJustify() {
	document.execCommand('justifyFull');  		
}







function deleteElement() {

	let getAllClassesSelected = document.querySelectorAll(".selected");

	for (i = 0; i < getAllClassesSelected.length; i++) {
		getAllClassesSelected[i].remove();
	}

	saveHistory();	

}


function duplicateElement() {

	let getAllClassesSelected = document.querySelectorAll(".selected");

	for (i = 0; i < getAllClassesSelected.length; i++) {
		var item =  getAllClassesSelected[i];
		var clone = item.cloneNode(true);
		item.after(clone);
	}
	saveHistory();
}









































// Funcao auxiliar de conteudo
function addComponent(typeComponent) {

	if (typeComponent == "FAQ") {
		addnNewContentBody("<div class='accordion-container'><div class='set'><a>1 - Lorem ipsum dolor sit amet?<i class='fa fa-plus'></i></a><div class='content'><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, facilis.</p></div></div>");
		
		let getAccordionJS = document.getElementById("accordionJS");
		getAccordionJS.remove();

		let createJSAcordion = document.createElement('script');
		createJSAcordion.setAttribute('src', "js/accordion.js");
		createJSAcordion.setAttribute('id', "accordionJS");
		document.body.appendChild(createJSAcordion);

	}  else if (typeComponent == "h1") {

		addnNewContentBody("<h1 class='selected'>Novo Subtitulo</h1>");
		saveHistory()
	
	}  else if (typeComponent == "h2") {

		addnNewContentBody("<h2 class='selected'>Novo Subtitulo</h2>");
		saveHistory()
	
	} else if (typeComponent == "h3") {

		addnNewContentBody("<h3 class='selected'>Novo Subtitulo</h3>");
		saveHistory()
	
	}  else if (typeComponent == "p") {

		addnNewContentBody("<p class='selected'>Novo paragrafo</p>");
		saveHistory()
	
	}  else if (typeComponent == "hr") {

		addnNewContentBody("<hr class='selected'>");
		saveHistory()

	} else if (typeComponent == "listaTextoImg") { 
		addnNewContentBody("<section class='container lista'><div class='row'><div class='column'><p>1. Lorem ipsum dolor sit amet, consectetur.</p><p>Dolor fugit corporis provident amet quo modi reiciendis neque quaerat tempore distinctio deleniti delectus omnis architect.</p><p>Quis dicta qui voluptates animi voluptatem.</p></div><div class='column'><img class='imagens__mockups' src='imgs/mock-1.png'></div></div></section>");
		saveHistory()
	}  else if (typeComponent == "listaImgTexto") { 
		addnNewContentBody("<section class='container lista'><div class='row'><div class='column'><img class='imagens__mockups' src='imgs/mock-1.png'></div><div class='column'><p>1. Lorem ipsum dolor sit amet, consectetur.</p><p>Dolor fugit corporis provident amet quo modi reiciendis neque quaerat tempore distinctio deleniti delectus omnis architect.</p><p>Quis dicta qui voluptates animi voluptatem.</p></div></div></section>");
		saveHistory()
	} else if (typeComponent == "containerImg") { 
		addnNewContentBody("<section class='container lista'><div class='row'><img class='img-full' src='imgs/mock-1.png'></div></section>");
		saveHistory()
	} else if (typeComponent == "listaVideo") { 
		addnNewContentBody("<section class='container lista'><div class='row'><div class='iframe__capsule'><h3>Clique aqui para adicionar um video</h3></div></div></section>");
		saveHistory()
	}


}



// Funcao que adiciona QUALQUER coisa no final do Body
function addnNewContentBody(content) {

	let conteudo1 = document.getElementById("content").innerHTML;
	let conteudo2 = content;
	conteudo1 = conteudo1 + conteudo2;
	document.getElementById("content").innerHTML = conteudo1;

	window.scrollTo(0,document.body.scrollHeight);

	contentEditable("true");
}


document.getElementById("moveUp").addEventListener("click", moveUpElement);



function moveUpElement() {

	let getAllClassesSelected = document.querySelectorAll(".selected");


	for (i = 0; i < getAllClassesSelected.length; i++) {

		var item =  getAllClassesSelected[i];
		var elemento = item.previousElementSibling;

		if (elemento != null) {
			elemento.before(item);
		} 

	}
	saveHistory();
}


document.getElementById("moveDown").addEventListener("click", moveDownElement);

function moveDownElement() {

	let getAllClassesSelected = document.querySelectorAll(".selected");

	for (i = 0; i < getAllClassesSelected.length; i++) {
		
		var item =  getAllClassesSelected[i];
		var elemento = item.nextElementSibling;

		if (elemento != null) {
			item.before(elemento);
		} 

	}

	saveHistory();

}


















// ------------------------------------------------------------------------------------------------------------------------------
// ----------------------------------------------------- Historico --------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------





// Array que guarda o historico.
// Por default esta guardando o conteudo html inicial.
var historyContent = [
		diretoryContent.innerHTML,
		diretoryContent.innerHTML,
		diretoryContent.innerHTML,
		diretoryContent.innerHTML,
		diretoryContent.innerHTML
];

// Adiciona em uma variavel a quantidade de itens de array.
var currentNumberHistory = historyContent.length - 1;






// ---------------------------------------------------------------------
// ---------------------------------------------------------------------
// Mostra a quantidade de itens dentro da array ANTES DE QUALQUER ACAO
// Resulta em 4 - Porem, que ao contar com o 0 fica em 5 elementos.
console.log("Existem "+currentNumberHistory+" items no historico.");
// ---------------------------------------------------------------------
// ---------------------------------------------------------------------



// ----------------------------------------
// --- Funcao de adicionar ao historico ---
// ----------------------------------------
function saveHistory() {
  
	// Se tiver adicionado 5 arrays, remove o primeiro
	if (historyContent.length >= 5) {

		// Funcao quer primeiro conteudo da array
		historyContent.shift();

	}
  
// Adiciona o conteudo dp diretorio no Array
historyContent.push(diretoryContent.innerHTML);

// Salvar
console.log("Salvo no historico");
console.log(historyContent);
    
}


// ----------------------------------------------------------------------------
// ---- Funcao que percorre o array e mostra o estado ANTERIOR do conteudo ----
// ----------------------------------------------------------------------------
function previousHistory() {


// Se o numero do array foi MAIOR OU IGUAL a 0 
if (currentNumberHistory >= 0 ) {     

	// Se ELE NAO FOR o numero maximo, ele DECREMENTA.
	if (currentNumberHistory !== 0) {
	// Remove um numero na contagem do array
	currentNumberHistory--;

	// Se ELE FOR o numero minimo, ele nao realiza acao de DECREMENTAR e da um aviso. 
	} else {
		// Mostra o aviso
		console.log("Nao existem mais arrays anteriores.");
	}                    
}
  
// Adiciona o atual conteudo do array no diretorio 
diretoryContent.innerHTML = historyContent[currentNumberHistory];
console.log("Numero do array mostrado no conteudo: " + currentNumberHistory + ".");      
}




// --------------------------------------------------------------------------
// --- Funcao que percorre o array e mostra o PROXIMO estado do conteudo ----
// --------------------------------------------------------------------------
function nextHistory() {

	
	// Se o numero do array foi MENOR OU IGUAL a 4 
	if(currentNumberHistory <= 4 ) {             

		// Se ELE NAO FOR o numero maximo, ele INCREMENTA.
		if (currentNumberHistory !== 4) {
		// Remove um numero na contagem do array
		currentNumberHistory++;

		// Se ELE FOR o numero maximo, ele nao realiza acao de incrementar e da um aviso.
		} else {
			// Aviso
			console.log("Nao existem mais arrays proximos.");
		}
	}

	// Adiciona o atual conteudo do array no diretorio 
	diretoryContent.innerHTML = historyContent[currentNumberHistory];
	console.log("Numero do array mostrado no conteudo: " + currentNumberHistory + ".");  

}


// ------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------
// ------------------------------------------------------------------------------------------------------------------------------


// --------------
// ---ATALHOS ---
// --------------

function KeyPress(e) {
  const evtobj = window.event? event : e
   if ((evtobj.ctrlKey || evtobj.metaKey) && evtobj.shiftKey && evtobj.keyCode == 90) {
     nextHistory();
     console.log("Next history");
  } else if ((evtobj.ctrlKey || evtobj.metaKey) && evtobj.keyCode == 90) {
    previousHistory();
    console.log("Previous history");
  } else if(evtobj.keyCode == 27) {
     removeAllSelects();          
  }
}

document.onkeydown = KeyPress;



























/* FileSaver.js
 * A saveAs() FileSaver implementation.
 * 2014-08-29
 *
 * By Eli Grey, http://eligrey.com
 * License: X11/MIT
 *   See https://github.com/eligrey/FileSaver.js/blob/master/LICENSE.md
 */

/*global self */
/*jslint bitwise: true, indent: 4, laxbreak: true, laxcomma: true, smarttabs: true, plusplus: true */

/*! @source http://purl.eligrey.com/github/FileSaver.js/blob/master/FileSaver.js */

var saveAs = saveAs
  // IE 10+ (native saveAs)
  || (typeof navigator !== "undefined" &&
      navigator.msSaveOrOpenBlob && navigator.msSaveOrOpenBlob.bind(navigator))
  // Everyone else
  || (function(view) {
	"use strict";
	// IE <10 is explicitly unsupported
	if (typeof navigator !== "undefined" &&
	    /MSIE [1-9]\./.test(navigator.userAgent)) {
		return;
	}
	var
		  doc = view.document
		  // only get URL when necessary in case Blob.js hasn't overridden it yet
		, get_URL = function() {
			return view.URL || view.webkitURL || view;
		}
		, save_link = doc.createElementNS("http://www.w3.org/1999/xhtml", "a")
		, can_use_save_link = "download" in save_link
		, click = function(node) {
			var event = doc.createEvent("MouseEvents");
			event.initMouseEvent(
				"click", true, false, view, 0, 0, 0, 0, 0
				, false, false, false, false, 0, null
			);
			node.dispatchEvent(event);
		}
		, webkit_req_fs = view.webkitRequestFileSystem
		, req_fs = view.requestFileSystem || webkit_req_fs || view.mozRequestFileSystem
		, throw_outside = function(ex) {
			(view.setImmediate || view.setTimeout)(function() {
				throw ex;
			}, 0);
		}
		, force_saveable_type = "application/octet-stream"
		, fs_min_size = 0
		// See https://code.google.com/p/chromium/issues/detail?id=375297#c7 for
		// the reasoning behind the timeout and revocation flow
		, arbitrary_revoke_timeout = 10
		, revoke = function(file) {
			var revoker = function() {
				if (typeof file === "string") { // file is an object URL
					get_URL().revokeObjectURL(file);
				} else { // file is a File
					file.remove();
				}
			};
			if (view.chrome) {
				revoker();
			} else {
				setTimeout(revoker, arbitrary_revoke_timeout);
			}
		}
		, dispatch = function(filesaver, event_types, event) {
			event_types = [].concat(event_types);
			var i = event_types.length;
			while (i--) {
				var listener = filesaver["on" + event_types[i]];
				if (typeof listener === "function") {
					try {
						listener.call(filesaver, event || filesaver);
					} catch (ex) {
						throw_outside(ex);
					}
				}
			}
		}
		, FileSaver = function(blob, name) {
			// First try a.download, then web filesystem, then object URLs
			var
				  filesaver = this
				, type = blob.type
				, blob_changed = false
				, object_url
				, target_view
				, dispatch_all = function() {
					dispatch(filesaver, "writestart progress write writeend".split(" "));
				}
				// on any filesys errors revert to saving with object URLs
				, fs_error = function() {
					// don't create more object URLs than needed
					if (blob_changed || !object_url) {
						object_url = get_URL().createObjectURL(blob);
					}
					if (target_view) {
						target_view.location.href = object_url;
					} else {
						var new_tab = view.open(object_url, "_blank");
						if (new_tab == undefined && typeof safari !== "undefined") {
							//Apple do not allow window.open, see http://bit.ly/1kZffRI
							view.location.href = object_url
						}
					}
					filesaver.readyState = filesaver.DONE;
					dispatch_all();
					revoke(object_url);
				}
				, abortable = function(func) {
					return function() {
						if (filesaver.readyState !== filesaver.DONE) {
							return func.apply(this, arguments);
						}
					};
				}
				, create_if_not_found = {create: true, exclusive: false}
				, slice
			;
			filesaver.readyState = filesaver.INIT;
			if (!name) {
				name = "download";
			}
			if (can_use_save_link) {
				object_url = get_URL().createObjectURL(blob);
				save_link.href = object_url;
				save_link.download = name;
				click(save_link);
				filesaver.readyState = filesaver.DONE;
				dispatch_all();
				revoke(object_url);
				return;
			}
			// Object and web filesystem URLs have a problem saving in Google Chrome when
			// viewed in a tab, so I force save with application/octet-stream
			// http://code.google.com/p/chromium/issues/detail?id=91158
			// Update: Google errantly closed 91158, I submitted it again:
			// https://code.google.com/p/chromium/issues/detail?id=389642
			if (view.chrome && type && type !== force_saveable_type) {
				slice = blob.slice || blob.webkitSlice;
				blob = slice.call(blob, 0, blob.size, force_saveable_type);
				blob_changed = true;
			}
			// Since I can't be sure that the guessed media type will trigger a download
			// in WebKit, I append .download to the filename.
			// https://bugs.webkit.org/show_bug.cgi?id=65440
			if (webkit_req_fs && name !== "download") {
				name += ".download";
			}
			if (type === force_saveable_type || webkit_req_fs) {
				target_view = view;
			}
			if (!req_fs) {
				fs_error();
				return;
			}
			fs_min_size += blob.size;
			req_fs(view.TEMPORARY, fs_min_size, abortable(function(fs) {
				fs.root.getDirectory("saved", create_if_not_found, abortable(function(dir) {
					var save = function() {
						dir.getFile(name, create_if_not_found, abortable(function(file) {
							file.createWriter(abortable(function(writer) {
								writer.onwriteend = function(event) {
									target_view.location.href = file.toURL();
									filesaver.readyState = filesaver.DONE;
									dispatch(filesaver, "writeend", event);
									revoke(file);
								};
								writer.onerror = function() {
									var error = writer.error;
									if (error.code !== error.ABORT_ERR) {
										fs_error();
									}
								};
								"writestart progress write abort".split(" ").forEach(function(event) {
									writer["on" + event] = filesaver["on" + event];
								});
								writer.write(blob);
								filesaver.abort = function() {
									writer.abort();
									filesaver.readyState = filesaver.DONE;
								};
								filesaver.readyState = filesaver.WRITING;
							}), fs_error);
						}), fs_error);
					};
					dir.getFile(name, {create: false}, abortable(function(file) {
						// delete file if it already exists
						file.remove();
						save();
					}), abortable(function(ex) {
						if (ex.code === ex.NOT_FOUND_ERR) {
							save();
						} else {
							fs_error();
						}
					}));
				}), fs_error);
			}), fs_error);
		}
		, FS_proto = FileSaver.prototype
		, saveAs = function(blob, name) {
			return new FileSaver(blob, name);
		}
	;
	FS_proto.abort = function() {
		var filesaver = this;
		filesaver.readyState = filesaver.DONE;
		dispatch(filesaver, "abort");
	};
	FS_proto.readyState = FS_proto.INIT = 0;
	FS_proto.WRITING = 1;
	FS_proto.DONE = 2;

	FS_proto.error =
	FS_proto.onwritestart =
	FS_proto.onprogress =
	FS_proto.onwrite =
	FS_proto.onabort =
	FS_proto.onerror =
	FS_proto.onwriteend =
		null;

	return saveAs;
}(
	   typeof self !== "undefined" && self
	|| typeof window !== "undefined" && window
	|| this.content
));
// `self` is undefined in Firefox for Android content script context
// while `this` is nsIContentFrameMessageManager
// with an attribute `content` that corresponds to the window

if (typeof module !== "undefined" && module !== null) {
  module.exports = saveAs;
} else if ((typeof define !== "undefined" && define !== null) && (define.amd != null)) {
  define([], function() {
    return saveAs;
  });
}






// Modo de salvar
function contentSave() {
	var text = document.documentElement.innerHTML;
	var filename = "index";
	var blob = new Blob([text], {type: "text/plain;charset=utf-8"});
	saveAs(blob, filename+".html");
}





// Modo de exportacao
function contentExport() {

	var findCoreJS;
	var findToggleJS;

	// ----------------------------------------------------------------------
	// ------------------------ APPLY PREVIEW MODE  -------------------------
	// ----------------------------------------------------------------------

	// Retira o editor
	modeEditor("none");

	// Remover o Conteudo editavel
	contentEditable("false");

	// Remover o o core.js
	findCoreJS = document.getElementById("coreJS");
	findCoreJS.remove();

	// Remover o o Toggle - Logo, ele nao cria novamente o core.js
	findToggleJS = document.getElementById("toggleJS");
	findToggleJS.remove();


	// -------------------------------------------------------------------
	// -------------------------- SAVE FILE ------------------------------
	// -------------------------------------------------------------------

	// Pega todo o html
	var text = document.documentElement.innerHTML;

	// Nome do arquivo que ira ser baixado
	var filename = "index";

	// Concatena todos os parametros
	var blob = new Blob([text], {type: "text/plain;charset=utf-8"});

	// Salva o arquivo
	saveAs(blob, filename+".html");


	// ----------------------------------------------------------------------
	// ------------------------ RETURN EDIT  MODE  --------------------------
	// ----------------------------------------------------------------------

	// Adiciona o core.js
	addCore();

	// Adiciona novamente o editor para o arquivo atual
	modeEditor("block");
}




	










