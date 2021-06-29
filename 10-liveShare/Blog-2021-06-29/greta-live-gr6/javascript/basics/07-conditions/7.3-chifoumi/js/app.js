let player;
let computer;

const PIERRE = 'pierre';
const FEUILLE = 'feuille';
const CISEAUX = 'ciseaux';

player = window.prompt('Que jouez-vous : pierre, feuille ou ciseaux ?');
player = player.toLowerCase();

let random = Math.random(); // 0.5498754564564987

if (random < 1 / 3) { 
    computer = PIERRE;
} 
else if (random < 2 / 3) {
    computer = FEUILLE;
}
else {
    computer = CISEAUX;
}

// Affichage des choix
document.write('<p>Vous avez joué : ' + player + '</p>');
document.write('<p>L\'ordinateur a joué : ' + computer + '</p>');

// On élimine d'abord l'égalité
if (player == computer) {
    document.write('<p>Il y a égalité !</p>');
}
else {

    switch(player) {
        case PIERRE:
            if (computer == FEUILLE) {
                document.write('<p>Vous avez perdu ! La feuille enveloppe la pierre !</p>');
            }
            else { // computer == ciseaux
                document.write('<p>Vous avez gagné ! La pierre casse les ciseaux !</p>');
            }
            break;

        case FEUILLE:
            if (computer == PIERRE) {
                document.write('<p>Vous avez gagné ! La feuille enveloppe la pierre !</p>');
            }
            else { // computer == ciseaux
                document.write('<p>Vous avez perdu ! Les ciseaux découpent la feuille !</p>');
            }
            break;

        case CISEAUX:
            if (computer == PIERRE) {
                document.write('<p>Vous avez perdu ! La pierre casse les ciseaux !</p>');
            }
            else { // computer == feuille
                document.write('<p>Vous avez gagné ! Les ciseaux découpent la feuille !</p>');
            }
            break;

        default:
            document.write('<p>' + player + ' n\est pas une réponse valide ! Vous trichez !</p>');
    }

}