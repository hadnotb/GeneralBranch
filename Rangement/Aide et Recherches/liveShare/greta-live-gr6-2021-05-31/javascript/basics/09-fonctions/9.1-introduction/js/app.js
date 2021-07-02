/****************************************/
/*              FONCTIONS               */
/****************************************/

/**
 * Définition d'nue fonction sayHello()
 * La fonction sayHello possède 1 paramètre facultatif car on lui donne une valeur par défaut ('world')
 */
function sayHello(name = 'world')
{
    // Si je fais le alert() dans la fonction, ce n'est pas très flexible
    // window.alert('Hello ' + name + ' !');

    // Je stocke le message dans une variable locale à la fonction (elle ne peut pas en sortir)
    let message = 'Hello ' + name + ' !';

    // Pour faire sortir le message, c'est-à-dire le contenu de la variable message mais pas la variable elle-même, je fais un return
    return message;
}



/****************************************/
/*            CODE PRINCIPAL            */
/****************************************/

/**
 * Appel de la fonction sayHello() avec en paramètre le résultat de la fonction prompt()
 * Je récupère le résultat de la fonction sayHello() dans la variable result
 */
let result = sayHello(prompt('Quel est ton nom ?'));

// Ensuite je fais ce que je veux de mon message
window.alert(result);

