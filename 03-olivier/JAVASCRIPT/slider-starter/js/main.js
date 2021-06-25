'use strict';   // Mode strict du JavaScript

/*************************************************************************************************/
/* ****************************************** DONNEES ****************************************** */
/*************************************************************************************************/
let photo = document.querySelectorAll("figure");
console.log(photo);
let next = document.getElementById("next");
console.log(next);
let prev = document.getElementById("prev");
let currentIndex = 0 ;
let random = document.getElementById("random");
let rplay = document.getElementById("play-pause");
let timer = 0;
let fa = document.querySelector("#play-pause i");
const puce = document.querySelector("#slider-dots")


let puceList;
for (let i=0 ; i<6 ; i++)
{
    puceList = document.createElement("li");
    puce.appendChild(puceList);
    
}   




/*************************************************************************************************/
/* ***************************************** FONCTIONS ***************************************** */
/*************************************************************************************************/

function reFresh()
{
    document.querySelector(".active").classList.remove("active");
    photo[currentIndex].classList.add("active");
}

function OnClickNext()
{
    // // let photosuivante = currentIndex + 1 ;
    // photo[currentIndex].classList.remove("active");
    // currentIndex ++;
    // if(currentIndex == photo.length){currentIndex=0;}
    // photo[currentIndex].classList.add("active");
    // console.log(currentIndex)

    // Ou alors 
    currentIndex ++;
    if(currentIndex == photo.length){currentIndex=0;}
    // document.querySelector(".active").classList.remove("active");
    // photo[currentIndex].classList.add("active");
    reFresh();
    
    

}
function OnClickPrev()
{
    currentIndex --;
    if(currentIndex == -1){currentIndex = photo.length -1 ;}
    // document.querySelector(".active").classList.remove("active");
    // photo[currentIndex].classList.add("active");
    reFresh();
}

function Random()
{   
    currentIndex = Math.floor(Math.random()*6);
    // document.querySelector(".active").classList.remove("active");
    // photo[currentIndex].classList.add("active");
    reFresh();

}

function PlayPause()
{
    console.log(timer);
    if (timer == 0)
    {
        timer = setInterval(OnClickNext,1000);
        fa.classList.remove("fa-play");
        fa.classList.add("fa-pause");
        // ou alors fa.classList.replace("fa-play","fa-pause")
        // return ;
        console.log("start")
    }
    
    else 
    {
    clearInterval(timer);
    fa.classList.add("fa-play");
    fa.classList.remove("fa-pause");
    // ou alors fa.classList.replace("fa-pause","fa-play")
    timer = 0 ;
    }
    // return ;
}

function onKeyDown(event)
{
 if(event.code === "ArrowLeft")
 {
     OnClickNext();
 }   

 else if(event.code === "ArrowRight")
 {
     OnClickPrev();
 }   
 else if(event.code === "Space")
 {
     PlayPause();
 }   
}
 
  
    
   



// CORRRECTTTTTION
 


/*************************************************************************************************/
/* ************************************** CODE PRINCIPAL *************************************** */
/*************************************************************************************************/

next.addEventListener("click", OnClickNext);
prev.addEventListener("click", OnClickPrev);
random.addEventListener("click", Random);
rplay.addEventListener("click", PlayPause);
document.addEventListener("keydown", onKeyDown)






/**
 * Code principal : code JavaScript exécuté dès le chargement de la page
 *
 * Pour s'assurer que le DOM est chargé (puisqu'on va le manipuler), on écoute l'événement 'DOMContentLoaded'
 * sur le document entier. Cet événement est lancé lorsque le navigateur a terminé de constuire le DOM.
 *
 * https://developer.mozilla.org/fr/docs/Web/Events/DOMContentLoaded
 *
 * On utilise en général comme fonction gestionnaire d'événement associée une fonction anonyme car
 * on ne l'appellera jamais ailleurs nous-même.
*/