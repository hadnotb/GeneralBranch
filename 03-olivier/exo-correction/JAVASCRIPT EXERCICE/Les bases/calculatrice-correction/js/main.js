'use strict';   // Mode strict du JavaScript

// Déclaration d'une variable pour stocker le résultat de l'opération
let result = null;

// Récupération des deux nombres et de l'opération mathématique à effectuer.
const number1   = parseFloat(window.prompt('Saisissez un premier nombre :'));
const number2   = parseFloat(window.prompt('Saisissez un deuxième nombre :'));

/*
 * Si l'utilisateur a saisi autre chose qu'un nombre dans les variables number1 ou number2 alors
 * les fonctions parseFloat() renvoient la valeur spéciale NaN.
 */
if(isNaN(number1) || isNaN(number2))
{
    document.write("<p>Vous n'avez pas saisi deux nombres !</p>");
} 
else {

    const operation = window.prompt('Quelle opération mathématique souhaitez-vous effectuer ?');

    // Exécution de la calculatrice.
    switch(operation) {
        case '+':
        case 'addition':
            result = number1 + number2;
            break;

        case '-':
        case 'soustraction':
            result = number1 - number2;
            break;

        case '*':
        case 'multiplication':
            result = number1 * number2;
            break;

        case '/':
        case 'division':
        { // On peut utiliser des accolades pour écrire le code à l'intérieur d'un case.

            if(number2 == 0)
            {
                document.write('<p>Erreur : vous ne pouvez pas diviser un nombre par 0 !</p>');

                // Le fait de placer un break ici permet de sortir IMMEDIATEMENT du switch.
                break;
            }

            result = number1 / number2;
        }
        break;

        case '^':
        case 'puissance':
            result = number1 ** number2;
            break;

        default:
            document.write("<p>Erreur : vous avez indiqué une opération inconnue !</p>");
            break;
    }

   /*
    * On vérifie que la variable result est différente de null, c'est-à-dire qu'il n'y a pas eu d'erreur pendant le calcul
    */
    if(result != null){
        document.write("<p>Le résultat de l'opération est <strong>" + result + '</strong>.</p>');
    }
}
