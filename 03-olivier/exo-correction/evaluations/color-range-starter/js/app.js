/******************************
 * DONNEES GLOBALES
 ******************************/
let images = ["red.jpg","orange.jpg","yellow.jpg","green.jpg","light-blue.jpg","blue.jpg","pink.jpg"]



/******************************
 * FONCTIONS
 ******************************/
 function onInputColorRange(){

    alert ("Nouvelle couleur selectionnée !");
    const range = document.getElementById("image-color");
    const index = range.value ; 
    console.log(index);
    const elmtVisible = document.getElementsByClassName("visible");
    elmtVisible.classList.remove;
    elmtVisible.classList.add(index);
    console.log(elmtVisible);


    return index ;
 }
function init(){
    
    // A reprendre
    for(let i = 0 ; i < images.length; i++){
        
       let newElement = document.createElement('img');
       console.log(newElement);
       newElement.src = images[i]  ;
       console.log(newElement);
       newElement.alt= "" ;
       newElement.classList = "color-image";
       newElement.setAttribute("id", "image-");
       let sec = document.querySelector(".images");
       console.log(sec);
        sec.appendChild(newElement);
        
        newElement[0].classList.add = ("visible");
        // console.log(images[0]);
        

    //    console.log(element.classList);
       
    }
    
};
/******************************
 * CODE PRINCIPAL
 ******************************/
init();

 let colorRangeInput = document.querySelector("input") ;
 colorRangeInput.addEventListener('change',onInputColorRange);

