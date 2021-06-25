///////////////////////
// DONNEES GLOBALES //
/////////////////////
// let premiereDef = document.getElementsByTagName("dd")[0].className = "visible";




///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////

// function changeClass(){

//     console.log("au moins 1 point");
//     let nextBro = this.nextSibling ;
//     console.log(nextBro.innerHTML);
//     nextBro.className.toggle("visible");

//     ///////////////////////////////////////////
//     for(let selections of selec){

//         selections.className.toggle("visible");
//     }
    
//     console.log(nextBro.innerHTML);

// }




/////////////////////
// CODE PRINCIPAL //
//////////////////
//  let titres = document.querySelectorAll("dt");


// for(const titre of titres){

   
//     titre.addEventListener('click', changeClass);
    
// }
/////////////////////////////////////////////////////////CORRECTION/////////////////////////////////////////////////


///////////////////////
// DONNEES GLOBALES //
/////////////////////





///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////

function onClickTitle(/*event*/){

    const dt = this;
                /*event.currentTarget*/
    document.querySelector('dt.selected').classList.remove('selected');/*Si un element a cette classe ou sinon faire une structure if*/
    dt.classList.add('selected');
    const dd = dt.nextElementSibling;
    document.querySelector('dd.visible').classList.remove('visible');
    dd.classList.add('visible');
}




/////////////////////
// CODE PRINCIPAL //
//////////////////

const dts = document.querySelectorAll('#my-definition-list dt');
dts[0].classList.add('selected');
dts[0].nextElementSibling.classList.add('visible');

for(const dt of dts){

    dt.addEventListener('click',onClickTitle);

} // document.querySelectorAll("#my-defenition-list dt").forEach(function(dt){dt.addEventListener('click',onClickTitle)});



