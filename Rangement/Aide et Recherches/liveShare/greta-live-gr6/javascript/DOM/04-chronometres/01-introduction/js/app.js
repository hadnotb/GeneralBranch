/**
 * window.setTimeout()
 */
function hello()
{
    console.log('Hello ! :)');
}

// Exécute la fonction hello() au bout de 3000 ms (3 secondes)
window.setTimeout(hello, 3000);

// On pourrait aussi écrire :
setTimeout(function (){
    console.log('Hello ! :)');
}, 3000);


/**
 * window.setInterval()
 */

 // Exécute la fonction hello() toutes les secondes
setInterval(hello, 1000);

// On pourrait aussi écrire :
setInterval(function (){
    console.log('Hello ! :)');
}, 1000);