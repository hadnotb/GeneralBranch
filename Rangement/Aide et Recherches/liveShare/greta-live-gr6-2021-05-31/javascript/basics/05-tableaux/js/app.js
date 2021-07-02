// Création d'un tableau 
let notes = new Array(18, 20, 14);

// La méthode push() permet d'ajouter des valeurs
notes.push(16, 15);
notes.push(17);

// Accéder à une case d'un tableau : à partir de l'indice de la case
console.log(notes[0]); // 18
console.log(notes[0] + notes[1]); // 38

// Modification d'une case du tableau
notes[0] = 17;

console.log(notes);

// Accéder à la taille du tableau = nombre d'éléments 
console.log('La taille du tableau notes est : ' + notes.length);

/*
 * Syntaxe alternative
 */
// let notesAlt = []; // Tableau vide
let notesAlt = [18, 15, 12]; // Remplace let notes = new Array(18, 15, 12);