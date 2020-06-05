console.log("Voce esta em homol");


// -----------------------------------------------------


// imageId
// templateId
// userId
// componentId variavel - Manipular com javascript - 
// imageName
// imageSrc


var getUrl;


// - encontrar todos paragrafos dentro de content
var getAllType = document.getElementById("imgsBiblioteca").querySelectorAll("img");

// - adicionar funcao de duplicar paragrafo evento de doubleclick
for (i = 0; i < getAllType.length; i++) {
	  getAllType[i].addEventListener("click", copySrc);
}



function changeImg() {

	let getAllClassesSelected = document.querySelectorAll(".selected");

	for (i = 0; i < getAllClassesSelected.length; i++) {
		
		getAllClassesSelected[i].src = getUrl;


	}

}



function copySrc(event) {

	getUrl = event.target.src;
	console.log(getUrl);

	modal.style.display = "none";

	changeImg();

}




// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

