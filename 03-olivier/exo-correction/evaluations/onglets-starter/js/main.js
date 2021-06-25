///////////////////////
// DONNEES GLOBALES //
/////////////////////
let premiereDef = document.getElementsByTagName("dd")[0].className = "visible";




///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////

function changeClass(){

    console.log("au moins 1 point");
    // let nextBro = this.nextSibling ;
    // console.log(nextBro.innerHTML);
    // nextBro.className.toggle("visible");

    // ///////////////////////////////////////////
    // for(let selections of selec){

    //     selections.className.toggle("visible");
    // }
    
    // console.log(nextBro.innerHTML);

}




/////////////////////
// CODE PRINCIPAL //
//////////////////
 let titres = document.querySelectorAll("dt");


for(const titre of titres){

   
    titre.addEventListener('click', changeClass);
    
}
