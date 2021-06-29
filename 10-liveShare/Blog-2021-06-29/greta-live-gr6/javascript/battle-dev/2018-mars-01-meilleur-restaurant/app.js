// Chemin vers le fichier d'entrée (données de test)
const inputFile = 'input/input1.txt';

// Import de la librairie file-system
const fs = require('fs');

// Création du flux de lecture vers le fichier d'entrée
const lineReader = require('readline').createInterface({
    input: fs.createReadStream(inputFile)
});

// Création du tableau qui contiendra les lignes du fichier d'entrée
let input = [];

// Lecture du fichier ligne par ligne
lineReader.on('line', function(line) {

    // On range dans le tableau input le contenu de la ligne courante
    input.push(line);
});

// Une fois qu'on a lu tout le fichier on le ferme et on appelle ContestResponse()
lineReader.on('close', function(){
    ContestResponse();
});

/*********************************************************************************/
/*
function sum(arr)
{
    let total = 0;

    for (const currentValue of arr) {
        total += currentValue;
    }

    return total;
}
*/

/*
function sum(arr)
{
    return arr.reduce(function(total, currentValue) {
        return total + currentValue;
    });
}*/

function sum(arr)
{
    return arr.reduce((total, currentValue) => total + currentValue);
}

function average(arr)
{
    return Math.ceil(sum(arr) / arr.length);
}

function ContestResponse()
{
    // 1°) On supprime le premier élément du tableau input
    input.shift();

    // 2°) Transformation des données en tableaux de nombres
    /*
    input.forEach(function(item, index) {
        input[index] = item.split(' ');
    });
    */

    //for (let i = 0 ; i < input.length ; i++) {
        // input[i] = input[i].split(' ');
        /*
        for (let j = 0 ; j < input[i].length ; j++) {
            input[i][j] = Number(input[i][j]);
        }
        */

        /*
        input[i] = input[i].map(function(item) {
            return Number(item);
        });*/

        // input[i] = input[i].map(item => Number(item));
        //input[i] = input[i].split(' ').map(Number);
    //}

    input = input.map(notes => notes.split(' ').map(Number));

    /**
     * Documentation
     *    - fonctions fléchées : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Functions/Arrow_functions
     *    - fonctions fléchées : https://fr.javascript.info/arrow-functions-basics  
     *    - méthode map() : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/map
     *    - méthode split() : https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/String/split
     */

    // 3°) Calcul des moyennes de chaque restaurant
    // input = input.map(notes => average(notes));
    input = input.map(average);

    // 4°) Trouver la plus grande moyenne du tableau input

    // Méthode 1 --> A la "mano" avec le même algorithme que l'exercice "Phrase la plus longue"
    // Méthode 2 --> Avec la méthode sort() de la classe Array    
    // Méthode 3 --> Avec la méthode max() de l'objet Math

    // METHODE 1 "a la mano" **************************************
        /*
    // max va contenir la plus grande moyenne à un instant t.
    // On l'initialise à -1 pour être sûr que toutes les moyennes du tableau seront supérieures
    let max = -1;

    // On parcours le tableau de moyennes 
    for(const currentAverage of input) {

        // Si la moyenne courante est plus grande que la moyenne maximale...
        if (currentAverage > max) {

            // ... la moyenne courante devient la moyenne maximale
            max = currentAverage;
        }
    } */
    // ************************************************************
    
    // METHODE 2 - Avec la méthode sort() *************************

    /*
    function compare(a, b) {
        if (a < b) {
            return -1;
        }
           
        if (a > b) {
            return 1;
        }
           
        // a doit être égal à b
        return 0;
    }

    input.sort(compare);
    */

    /*
    input.sort((a, b) => b - a);

    const max = input[0];
    
    console.log(max);*/
    // ************************************************************


    // METHODE 3 - Avec la méthode max() de l'objet Math **********

    const max = Math.max(...input);

    console.log(max);

    // ************************************************************
}