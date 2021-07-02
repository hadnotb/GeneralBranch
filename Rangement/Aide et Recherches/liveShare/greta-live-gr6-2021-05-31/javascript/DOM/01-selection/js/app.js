
// Sélection de l'élément qui possède l'id (HTML) 'lorem-para'
const paragraph = document.getElementById('lorem-para');

// Pour affciher le nom de la classe de l'élément sélectionné
// console.log(paragraph.constructor.name);

// Sélection de l'élément h1
const title = document.querySelector('h1');

// console.log(title);

// Sélection à partir de la classe d'un élément
const subtitle = document.querySelector('.subtitle');
// console.log(subtitle);

const link  = document.querySelector('.link');

console.log(link); // Si aucun élément n'est trouvé, on récupère la valeur null

const blabla = document.querySelector('.blabla-para');

console.log(blabla); // querySelector() retourne UN SEUL élément (le premier qui correspond au sélecteur)

// Sélection de plusieurs éléments d'un coup
const allBlabla = document.querySelectorAll('.blabla-para');

// querySelectorAll() retourne tous les éléments qui correspondent au sélecteur CSS dans un objet NodeList que l'on peut parcourir comme un tableau
for (let i = 0 ; i < allBlabla.length ; i++) {

    console.log(allBlabla[i]);

    // allBlabla[i].textContent = 'Paragraphe n°' + (i + 1) ;
    allBlabla[i].innerHTML = 'Paragraphe n°<strong>' + (i + 1) + '</strong>';
}

console.log(title.textContent);

// console.log(subtitle.className);
// subtitle.className += ' important';

// Pour manipuler les classes d'un élément (ajout, existence, suppression, etc)
// le plus pratique c'est d'utiliser l'API classList
subtitle.classList.add('important');