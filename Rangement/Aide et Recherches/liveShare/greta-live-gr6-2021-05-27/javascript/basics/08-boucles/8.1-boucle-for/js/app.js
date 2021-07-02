/**
 * for (initialisation ; condition d'entrée ; mise à jour) {
 * 
 *      // Corps de la boucle : instructions répétées
 * }
 */

// Boucle for faisant 10 tours de boucle qui compte de 0 à 10
for (let i = 0 ; i < 10 ; i++) {

    console.log('Tour de boucle n°' + i);
}

// Boucle for faisant 10 tours de boucle qui compte de 9 à 0
for (let i = 9 ; i >= 0 ; i) {

    console.log(i);
}

// Boucle allant de 0 à 100 et affichant les multiples de 5 (nombres divisibles par 5) VERSION 1
for (let i = 0 ; i <= 100 ; i++) {

    if (i % 5 == 0) {
        console.log(i);
    }
}

// Boucle allant de 0 à 100 et affichant les multiples de 5 (nombres divisibles par 5) VERSION 2
for (let i = 0 ; i <= 100 ; i+=5) {

    console.log(i);
}

/**
 * PARCOURIR UN TABLEAU AVEC LA BOUCLE FOR
 */
const numbers = [ 10, 20, 30, 40, 50 ];

document.write('<h2>Première variante</h2>');

/*
 * Boucle affichant tous les éléments d'un tableau.
 *
 *
 * La structure de contrôle for possède trois parties :
 *
 * for(INITIALISATION; COMPARAISON; MISE A JOUR)
 * {
 *     // ...
 * }
 */
for(let index = 0; index < 5; index++)
{
    document.write('<p>' + numbers[index] + '</p>');
}


document.write('<h2>Deuxième variante</h2>');

/*
 * Le problème de la boucle du dessus c'est qu'elle est STATIQUE :
 * qu'arrive-t'il si le tableau dispose de plus ou de moins de 5 éléments ?
 *
 * Il faut rendre la comparaison de la boucle DYNAMIQUE, en se basant sur la longueur du tableau.
 *
 * Les tableaux étant de la classe Array, ils possèdent une propriété length :
 * http://devdocs.io/javascript/global_objects/array/length
 */
for(let index = 0; index < numbers.length; index++)
{
    document.write('<p>' + numbers[index] + '</p>');
}
