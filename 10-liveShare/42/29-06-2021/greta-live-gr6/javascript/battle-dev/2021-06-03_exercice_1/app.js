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

function ContestResponse()
{
    const D = parseInt(input.shift());
    const L = parseInt(input.shift());

    const result = D + 5 * L;

    console.log(result); 
}