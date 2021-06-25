/******************************
 * DONNEES GLOBALES
 ******************************/
// let images = ["red.jpg","orange.jpg","yellow.jpg","green.jpg","light-blue.jpg","blue.jpg","pink.jpg"]



/******************************
 * FONCTIONS
 ******************************/
//  function onInputColorRange(){

//     alert ("Nouvelle couleur selectionnée !");
//     const range = document.getElementById("image-color");
//     const index = range.value ; 
//     console.log(index);
//     const elmtVisible = document.getElementsByClassName("visible");
//     elmtVisible.classList.remove;
//     elmtVisible.classList.add(index);
//     console.log(elmtVisible);


//     return index ;
//  }
// function init(){
    
//     // A reprendre
//     for(let i = 0 ; i < images.length; i++){
        
//        let newElement = document.createElement('img');
//        console.log(newElement);
//        newElement.src = images[i]  ;
//        console.log(newElement);
//        newElement.alt= "" ;
//        newElement.classList = "color-image";
//        newElement.setAttribute("id", "image-");
//        let sec = document.querySelector(".images");
//        console.log(sec);
//         sec.appendChild(newElement);
        
//         newElement[0].classList.add = ("visible");
//         // console.log(images[0]);
        

//     //    console.log(element.classList);
       
//     }
    
// };
/******************************
 * CODE PRINCIPAL
 ******************************/
// init();

//  let colorRangeInput = document.querySelector("input") ;
//  colorRangeInput.addEventListener('change',onInputColorRange);

// // COOOOOOOOOOOOOOOOOOOOOOREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEECTIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN

/******************************
 * DONNEES GLOBALES
 ******************************/
    const images = ["red.jpg","orange.jpg","yellow.jpg","green.jpg","light-blue.jpg","blue.jpg","pink.jpg"]
/******************************
 * FONCTIONS
 ******************************/
    function onInputColorRange(){

        console.log("new color selected");

        const index = this.value;
                    // eventcurrentTarget.value;
                    //colorRangeInput.value;
        document.querySelector('.visible').classList.remove('visible');
        document.getElementById('image-' + index).classList.add('visible');    

    }


    function init(){
        const imagesContainer = document.querySelector('.images');
        for(let i = 0 ; i < images.length; i++){
            const img = document.createElement('img'); //ou alors new ("image")
            console.log(img);
            img.src ='img/'+ images[i];
            img.alt ="";
            img.classList.add('color-image');
            img.id = "image-" + i ;
            imagesContainer.appendChild(img);
        }
        document.querySelector('#image-0').classList.add('visible');
    }
/******************************
 * CODE PRINCIPAL
 ******************************/
init();
const colorRangeInput = document.getElementById('image-color');
colorRangeInput.addEventListener("change", onInputColorRange);
colorRangeInput.dispatchEvent(new Event("change"));