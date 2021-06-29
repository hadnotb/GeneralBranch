// Mode strict de JavaScript 
'use strict';

// On demande le mot de passe à l'internaute
let password = window.prompt('Ecrivez un mot de passe...');

// On supprime les espaces au début et à la fin de la chaîne de caractères
password = password.trim();

// Test #1 : est-ce que l'internaute a bien écrit quelque chose (autre chose que des espaces)
if (!password) {
// if (password.length == 0) {  //  --> on peut aussi regarder si la longueur du mot de passe une fois débarrassé de ses espaces est égale à 0
// if (password <= "") {        // --> cette solution fonctionne également 

    document.write('<p>Votre mot de passe est vide.</p>');
}
// Sinon (l'utilisateur a bien écrit un mot de passe on continue la suite des tests)
else {

    // On va faire ici la suite des tests

    // Test #2 : longueur du mot de passe
    if (password.length < 8) {
        document.write('<p>[Erreur] Votre mot de passe est trop court, il doit faire au moins 8 caractères.</p>');
    } 
    else if (password.length > 12) {
        document.write('<p>[Erreur] Votre mot de passe est trop long, il doit faire au plus 12 caractères.</p>');
    }
    else {
        document.write('<p>[OK] Votre mot de passe contient bien entre 8 et 12 caractères.</p>');
    }

    // Test #3 : le premier caractère du mot de passe est-il un chiffre ? 

    // let firstChar = password[0];
    // let firstChar = password.substring(0, 1);
    let firstChar = password.charAt(0);

    // if (isNaN(firstChar) == false) {
    if (!isNaN(firstChar)) {
        document.write('Le premier caractère est un chiffre');
    }
    else {

        // Le premier caractère du mot de passe n'est pas un chiffre, on continue les autres tests

        // test #4 : le premier caractère est-il une voyelle, une consome ou un caractère spécial ?
        
        // On stocke les voyelles et les consomnes dans des tableaux
        const vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
        const consomnes = ['b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];

        // On regarde ensuite si la première lettre fait partie de l'un ou l'autre tableau (attention aux majuscules / minuscules)
        firstChar = firstChar.toLowerCase();

        if (vowels.includes(firstChar)) {
            document.write('Votre mot de passe commence par une voyelle.');
        }
        else if (consomnes.includes(firstChar)) {
            document.write('Votre mot de passe commence par une consomnes.');
        }
        else {
            document.write('Votre mot de passe commence par un caractère spécial.');
        }

        // test #5 : le mot de passe commence-t-il par 'aze' ?
        // if (password.substring(0,3).toLowerCase() == 'aze') {
        if (password.toLowerCase().startsWith('aze')) {
            document.write('Votre mot de passe commence par "aze", un peu dangereux.');
        }

        // test #6 : tests de valeurs précises pour la première lettre
        switch(firstChar){
            case 'p':
                document.write('<p>Votre mot de passe commence par un P comme Patrick.</p>');
                break;
            case 'b':
                document.write('<p>Votre mot de passe commence par un B comme Bernard.</p>');
                break;
            case 'm':
                document.write('<p>Votre mot de passe commence par un M comme Mona.</p>');
                break;   

        }
    }
}