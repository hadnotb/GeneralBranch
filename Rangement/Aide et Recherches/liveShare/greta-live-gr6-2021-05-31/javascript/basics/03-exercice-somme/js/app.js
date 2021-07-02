let number1 = window.prompt('Donnez un premier nombre svp.');
let number2 = window.prompt('Donnez un deuxième nombre svp.');

// Pour l'instant les valeurs contenues dans les variables number1 et number2 sont de type 'string' (chaînes de caractères)
console.log(typeof number1, typeof number2);

// Solution 1 : Création de nombres à partir des chaînes de caractères rentrées par l'internaute
// number1 = Number(number1);
// number2 = Number(number2);

// Solution 2 : conversion des valeurs rentrées par l'internaute en entiers
number1 = parseInt(number1);
number2 = parseInt(number2);

// Pour convertir une valeur en nombre flottant (nombre à virgule) on utilise la fonction parseFloat()

// Après création de nombres à partir des valeurs rentrées par l'internaute, on a des variables de type 'number' (nombres)
console.log(typeof number1, typeof number2);

// Addition
let sum = number1 + number2;

console.log(sum);

/**
 * Types primitifs les plus courants :
 * - boolean
 * - string 
 * - number
 * - undefined
 * - null
 * 
 * Type supplémentaire : 
 * - object
 */