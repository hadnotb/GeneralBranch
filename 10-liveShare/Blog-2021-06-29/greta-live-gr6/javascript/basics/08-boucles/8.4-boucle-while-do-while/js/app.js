/**
 * La boucle while() est la boucle nuiverselle : on peut otut faire avec
 * On peut reproduire le principe de la boucle for : compter
 */

// On initialise un compteur
let i = 1;

// On boucle tant que 1 est inférieur ou égal à 10
while (i <= 10) {

    // On affiche dans la console le numéro du tour courant
    console.log('Tour de boucle n°' + i);

    // On modifie la variable i : si on n'intervient pas sur la condition, on risque une boucle infinie
    i++;
}

// Mais généralement on utilise la boucle while lorsqu'on ne connaît pas le nombre de tours à faire...
// Par exemple, demander à l'utilisateur un nombre, tant que ce n'est pas un nombre

let n = window.prompt('Donnez-moi un nombre !');

// Tant que n n'est pas un nombre...
while (isNaN(n)) {

    // ... on redemande un nombre à l'internaute. 
    // la variable n est bien mise à jour, pas de risque de boucle infinie
    n = window.prompt('Donnez-moi un nombre !');
}

// Question : que se passe-t-il si on n'écrit rien ? Si on clique sur le bouton "Annuler" ?

// L'inconvénient du script ci-dessus est que l'on répète une même instruction
// On déteste se répéter ! DRY : Don't Repeat Yourself ;)
// La boucle do...while permet de faire une instruction PUIS de regarder la condition
let nombre;

do {
    n = window.prompt('Donnez-moi un nombre !');
} while(isNaN(n));

console.log('Bravo vous avez donné un nombre.');

// Variante : demander un nombre entre 1 et 10
// On doit demander un nombre tant que ce n'est pas nu nombre, ou si le nombre est trop petit, ou si le nombre est trop grand
let numberBetween1and10;

do {
    numberBetween1and10 = window.prompt('Donnez-moi un nombre !');
} while(isNaN(numberBetween1and10) || numberBetween1and10 < 1 || numberBetween1and10 > 10);

console.log('Bravo vous avez donné un nombre !');