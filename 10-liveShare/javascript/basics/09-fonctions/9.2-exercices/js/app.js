/****************************************/
/*              FONCTIONS               */
/****************************************/

// Définition de la fonction arraySum()
function arraySum(array)
{
    let sum = 0;
    for (let i = 0 ; i < array.length ; i++) {
        sum += array[i];
    }
    return sum;
}

// Définition de la fonction arrayAverage()
function arrayAverage(array)
{
    // On fait appel à notre fonction arraySum() pour faire la somme du tableau
    let average = arraySum(array) / array.length;

    // Retour du résultat
    return average;
}

// Définition de la fonction getRandomInt()
function getRandomInt(min, max)
{
    let random = Math.floor(Math.random() * (max - min + 1)) + 1;

    // Retour du résultat
    return random;
}


function loto1()
{
    // On définit une variable locale tirage pour stocker les nombres aléatoires dans un tableau
    let tirage = [];

    // On fait une boucle for pour faire 6 tour puisqu'on a besoin de 6 numéros
    for (let i = 0 ; i < 6 ; i++) {

        let random;

        do {
            // On tire un entier aléatoire entre 1 et 49...
            random = getRandomInt(1, 49);
        }
        while (tirage.includes(random)); // Tant que le nombre tiré existe déjà dans le tableau, on recommence

        // On ragne le nombre dans le tableau 
        tirage.push(random);
    }

    // On retourne le tableau de nombres
    return tirage;
}

function loto2()
{
    // On définit une variable locale tirage pour stocker les nombres aléatoires dans un tableau
    let tirage = [];

    // Tant que je n'ai pas mes 6 nombres aléatoires distincts, je continue 
    while (tirage.length < 6) {

        // On tire un nombre aléatoire
        let random = getRandomInt(1, 49);

        // Si on a déjà le nombre, on passe directement au tour de boucle suivant
        if (tirage.includes(random)) {
            continue;
        }

        // On ragne le nombre dans le tableau tirage
        tirage.push(random);
    }

    // On retourne le tableau de nombres
    return tirage;
}

// @TODO : faire une version de la fonction loto() avec les Sets pour gérer les doublons

function requestInteger(min, max)
{
    let n;

    do {
        n = parseInt(window.prompt(`Donez-moi un nombre entre ${min} et ${max}`));
        // n = window.prompt('Donez-moi un nombre entre ' + min + ' et ' + max);
    }
    while (isNaN(n) || n < min || n > max);

    return n;
}


function isPalindrome(word)
{
    // On commence par tout mettre en minuscules
    let test = test.toLowerCase();

    // 1. Convertir la chaîne de caractères en tableau : chaque lettre dans une case du tableau
    // test = [...word]; 
    test = word.split(''); // avec 'hello' on obtient  [ "h", "e", "l", "l", "o" ]

    // On inverse l'ordre des cases du tableau 
    test = test.reverse(); // avec 'hello' on obtient  [ "o", "l", "l", "e", "h" ]

    // On reconstitue le mot à partir du tableau inversé
    test = test.join(''); // 'olleh'

    // Il ne reste plus qu'à comparer la chaîne inversée avec la chaîne de départ
    return test == word;
}

function isPalindrome2(word)
{
    return word == word.split('').reverse().join('');
}

/****************************************/
/*            CODE PRINCIPAL            */
/*          TEST DES FONCTIONS          */
/****************************************/

// Test de la fonction arraySum()
let tab = [1,2,3,4];
let somme = arraySum(tab);
console.log(somme); // 10

// Test de la fonction arrayAverage()
console.log(arrayAverage(tab));

// Test de la fonction getRandomInt()
console.log(getRandomInt(1,100));

// Test de la fonction loto1()
let tirage1 = loto1();
console.log(tirage1);

// Test de la fonction loto2()
let tirage2 = loto2();
console.log(tirage2);

// Test de la fonction requestInteger()
let integer = requestInteger(1, 10);
console.log(integer);

// Test de la fonction isPalindrome()
let result = isPalindrome('laval');
console.log(result); // true

// Test de la fonction isPalindrome2()
console.log(isPalindrome2('hello')); // false