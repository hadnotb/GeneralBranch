'use strict';

const password = window.prompt('Proposez un mot de passe entre 8 et 12 caractères.');
const length = password.trim().length;

if(length == 0){
    document.write("<p>Vous n'avez rien tapé!</p>");
} 
else {

    document.write("<p>Vous avez tapé le mot de passe suivant : <b>" + password + "</b></p>");

    // La longueur du mot de passe est-elle correcte ?
    if(length < 8){
        document.write('<p>Le mot de passe est trop court!</p>');
    }

    if(length > 12){
        document.write('<p>Votre mot de passe est trop long.</p>');
    }

    if(length >= 8 && length <= 12){
        document.write('<p>La longueur de votre mot de passe est correcte.</p>');
    }

    // Le mot de passe commence-t-il par un chiffre ?
    let firstLetter = password.charAt(0);
    
    // Si le mot de passe commence par un chiffre...
    if(isNaN(firstLetter) == false){

        document.write('<p>Votre mot de passe commence par un chiffre.</p>');
    }
    else {

        document.write('<p>Votre mot de passe commence par une lettre ou un caractère spécial.</p>');

        // Le mot de passe commence-t-il par une voyelle ou une consomne ?
        firstLetter = firstLetter.toLowerCase();
        const vowels = ['a', 'e', 'i', 'o', 'u', 'y'];
        const consomnes = ['b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'];

        if(vowels.includes(firstLetter)){
            document.write('<p>Votre mot de passe commence par une voyelle.</p>');
        }
        else if(consomnes.includes(firstLetter)) {
            document.write('<p>Votre mot de passe commence par une consomne.</p>');
        }

        console.log(firstLetter)

        // Le mot de passe commence-t-il par 'aze' ?
        if(password.toLowerCase().startsWith('aze')){
            document.write('<p>Votre mot de passe commencence par <b>aze</b>, pas très original.</p>');
        }

        // Les lettres qui commencet comme...
        switch(firstLetter){
            case 'p':
                document.write('<p>Votre mot de passe commence par un P comme Patrick.</p>');
                break;
            case 'b':
                document.write('<p>Votre mot de passe commence par un B comme Bernard.</p>');
                break;
            case 'm':
                document.write('<p>Votre mot de passe commence par un M comme Mona.</p>');
                break;   
                
            default:
                document.write('<p>Votre mot de passe ne commence ni par P, ni par B, ni par M.</p>');
                break;
        }
    }

    
}

