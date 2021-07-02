'use strict';   // Mode strict du JavaScript

///////////////////////////////
// DECLARATION DE FONCTIONS //
/////////////////////////////
function onClickLi()
{
   /**
    * Dans un gestionnaire d'événement (une fonction qui réagit à un événement)
    * le mot-clé this contient l'élément déclencheur, l'élément du DOM sur lequel 
    * on a installé l'écouteur d'événement
    * 
    * Dans notre cas this correspond donc à l'élément <li> qui a été cliqué
    */
   // console.log(this);
   let selected = this.classList.toggle('selected');

   /*
   // Si on a sélectionné une nouvelle image...
   if (selected) {
       selectedPhotos++;
   } 
   // Si on a désélectionné une image...
   else {
       selectedPhotos--;
   }
   */

   let selectedPhotos = document.querySelectorAll('.selected');

   document.querySelector('#total em').textContent = selectedPhotos.length;
}


/////////////////////
// CODE PRINCIPAL //
///////////////////
const liElements = document.querySelectorAll('.photo-list li');

// let selectedPhotos = 0;

/*
for (let i = 0 ; i < liElements.length ; i++) {

    liElements[i].addEventListener('click', onClickLi);
}
*/

// Pour chaque valeur du tableau liElements, je stocke cette valeur dans la variable li
for (const li of liElements) {

    li.addEventListener('click', onClickLi);
}