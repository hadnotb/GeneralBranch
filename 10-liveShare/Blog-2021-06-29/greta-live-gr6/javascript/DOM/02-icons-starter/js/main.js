'use strict'; // Mode strict de JavaScript

////////////////////////////////////////////////////////////
// 1. les animaux doivent être bleus SAUF skippy le chien //
////////////////////////////////////////////////////////////
const animals = document.querySelectorAll('.animal');

//const animals = document.querySelectorAll('.animal:not(#skippy)');

for (let i = 0 ; i < animals.length ; i++) {

    /**
     * Pour récupérer l'id, 2 solutions : 
     * - utiliser la méthode getAttribute() qui permet de récupérer la valeur de n'importe quel attribut HTML
     * - accéder directement à la propriété id de l'élément 
     */

    // console.log(animals[i].getAttribute('id')); // null si pas d'id
    // console.log(animals[i].id); // chaîne vide <empty string> si pas d'id

    // Si l'id (HTML) de l'élément est différent de 'skippy'...
    if (animals[i].id != 'skippy') {

        // ...alors on lui donne la classe CSS 'blue' pour le mettre en bleu
        animals[i].classList.add('blue');
    }
}

/*
for (const animal of animals) {
    if (animal.id != 'skippy') {
        animal.classList.add('blue');
    }
}
*/

/**
 * On pouvait aussi d'abord mettre tous les animaux en bleu (y compris Skippy)
 * Puis dans un second temps, après la boucle, enlever la couleur bleu à Skippy
 */
// document.getElementById('skippy').classList.remove('blue');

/////////////////////////////////////////
// 2. les véhicules doivent être verts //
/////////////////////////////////////////
const vehicles = document.querySelectorAll('.vehicle');

/*
for (let i = 0 ; i < vehicles.length ; i++) {

    vehicles[i].classList.add('green');
}
*/

/**
 * On peut également parcourir un tableau (tout objet "parcourable (itérable)") avec la boucle for...of
 * La constante vehicle va représenter chaque élément du tableau (premier tour de boucle => premier élément, etc)
 * Documentation : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/for...of
 */
for (const vehicle of vehicles) {

    vehicle.classList.add('green');
}

///////////////////////////////////////////////
// 3. tous les icones doivent être grandes   //
///////////////////////////////////////////////
let smallIcons = document.querySelectorAll('.fa-2x');

for (const icon of smallIcons) {
    icon.classList.replace('fa-2x', 'fa-4x');
}


////////////////////////////////////
// 4. la carotte doit être orange //
////////////////////////////////////
document.querySelector('.fa-carrot').classList.add('orange');


/////////////////////////////////////////////////
// 5. le cookie doit se transformer en carotte //
/////////////////////////////////////////////////
const cookieToCarrot = document.querySelector('.fa-cookie-bite');

cookieToCarrot.classList.replace('fa-cookie-bite', 'fa-carrot');
cookieToCarrot.classList.add('orange');