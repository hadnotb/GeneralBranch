/*
console.log("Salut la console !");
window.alert('Je suis une fenêtre d\'alerte !');
window.alert("Je suis une fenêtre d'alerte !");
document.write('<h2>Hello le document !</h2>');
*/

// Commentaire sur une seule ligne

// Déclaration d'une variable nommée 'firstname'
let firstname;

console.log(firstname); // undefined : pour l'instant la variable ne contient aucune valeur

firstname = 'Bertrand'; // Nouvelle affectation : la valeur précédente est écrasée (remplacée)

console.log(firstname); 

firstname = 18; // JS n'est pas un langage fortement "typé" : une même variable peut contenir n'importe quel type de données

console.log(firstname); 

// Affectation de la valeur 'Alfred' à la variable firstname
firstname = 'Alfred';

console.log(firstname); // Alfred

// Déclaration et affectation dans la même instruction
let lastname = 'Dupont';

// Il est même possible de déclarer plusieurs variables en même temps
let var1 = 'titi', var2, var3 = 'toto';

// Concaténation : mettre bout à bout plusieurs morceaux pour construire une chaîne de caractères
console.log('Bonjour ' + firstname + ' ' + lastname + ' !');

// Avec les backquotes et l'interpolation de variables
console.log(`Bonjour ${firstname} ${lastname} !`);

// Nombres et opérations arithmétiques : + - * / % ** ++ --
let age = 30;

age += 1; // age = age + 1;
age++; // Opérateur d'incrémentation

age = (age + 1) * 365;

age = age + 10;
age += 10;


