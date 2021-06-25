/******************************
 * DONNEES GLOBALES
 ******************************/
let images = ["red.jpg, orange.jpg, yellow.jpg, green.jpg, blue.jpg, light-blue.jpg, pink.jpg"]


/******************************
 * FONCTIONS
 ******************************/
function onInputColorRange(){

    alert("Une nouvelle couleur a été selectionné");
    let index = this.value ;
    document.querySelector(".visible").classList.remove;
    document.getElementById('image-'+index).classList.add('visible');
}
function init(){
    const imagesContainer = document.querySelector(".images");
    for(let i = 0 ; i < images.length ; i++){

        let img = document.createElement("img");
            img.src = 'img/' + images[i];
            img.classList.add = "color-image";
            img.id = "image-" . i ;
            imagesContainer.appendChild(img);        
    }
    document.querySelector("#image-0").classList.add('visible');
}


/******************************
 * CODE PRINCIPAL
 ******************************/
init();

let colorRangeInput = document.querySelector("#image-color");
console.log (colorRangeInput);
colorRangeInput.addEventListener("change", onInputColorRange);
colorRangeInput.dispatchEvent(new Event("change"));