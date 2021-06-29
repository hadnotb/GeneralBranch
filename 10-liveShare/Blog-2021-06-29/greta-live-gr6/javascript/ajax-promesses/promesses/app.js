// Fonctions
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
}

function getNumber()
{
    return new Promise(function(resolve, reject){
        const int = getRandomInt(0,100);
        if (int%2 === 0) {
            resolve(int);
        } else {
            reject(int);
        }
    });
}

// Code principal
getNumber()
    .then(function(result){
        console.log('Gagné avec ' + result);
    })
    .catch(function(error) {
        console.log('Perdu avec ' + error);
    });
