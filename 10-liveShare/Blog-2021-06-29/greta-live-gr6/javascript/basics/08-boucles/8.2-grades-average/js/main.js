'use strict';   // Mode strict du JavaScript

// Soit la classe suivante
const students = [
    {
        firstname: 'Claire',
        lastname: 'Jollet',
        birhtDate: '2005-05-12',
        grades: [14,15,14,14,16,12]
    },
    {
        firstname: 'Léo',
        lastname: 'Chapelier',
        birhtDate: '2004-05-12',
        grades: [10,11,9,10,12,8]
    },
    {
        firstname: 'Oscar',
        lastname: 'Wilde',
        birhtDate: '1854-09-16',
        grades: [18,17,20,18,19,17]
    },
];

// On commence par parcourir le tableau d'étudiants contenu dans la variable students avec une boucle for
for (let i = 0 ; i < students.length ; i++) {

    // Si je veux afficher les notes du ième étudiant
    console.log(students[i].grades);

    // On déclare ensuite une variable pour stocker la somme des notes. Au départ, on dit que la somme vaut 0.
    let sum = 0;

    // Puis on va parcourir le tableau de notes pour les additioner avec une nouvelle boucle for (attention à changer le nom du compteur)
    for (let j = 0 ; j < students[i].grades.length ; j++) {

        // Pour chaque note, je l'ajoute à la variable sum
        sum += students[i].grades[j];
    }

    // Ici la variable sum contient la somme des notes de l'étudiant, il ne reste plus qu'à diviser par le nombre de notes pour obtenir la moyenne
    console.log(sum);

    let average = sum / students[i].grades.length;

    // On arrondi à 2 chiffres après la virgule
    average = Math.round(average * 100) / 100;

    // On peut stocker la moyenne à l'intérieur de chaque objet étudiant dans une nouvelle propriété average
    students[i].average = average;
}

