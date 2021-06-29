let age = parsenInt(window.prompt('Quel est votre âge ?'));

// @TODO conversion en nombre ?
// La conversion n'est pas obligatoire car il n'y a pas d'ambiguité ensuite mais ça peut êtr eplus prudent

if (age >= 12 && age <= 26) {
    document.write('Carte JEUNE OK !');
} 
else {
    document.write('Carte JEUNE PAS OK');
}

if (age >= 60) {
    document.write('Carte SENIOR OK !');
}
else {
    document.write('Carte SENIOR PAS OK');
}