// Création d'un objet de la classe Object dans une variable car
let car = new Object();

// Ajout de propriétés (caractéristiques) à l'objet
car.brand = 'Nissan'; // brand = marque
car.model = 'Juke'; 
car.color = 'Black';
car.power = 110;

car.color = 'Red';

// Affichage
document.write('<ul>');
document.write('<li>Marque : ' + car.brand + '</li>');
document.write('<li>Modèle : ' + car.model + '</li>');
document.write('<li>Couleur : ' + car.color + '</li>');
document.write('<li>Puissance : ' + car.power + '</li>');
document.write('</ul>');

/*
 * Syntaxe alternative
 */
// let carAlt = {}; // équivaut à let carAlt = new Object();
let carAlt = {
    brand: 'Nissan',
    model: 'Juke',
    color: 'Black',
    power: 110
};
