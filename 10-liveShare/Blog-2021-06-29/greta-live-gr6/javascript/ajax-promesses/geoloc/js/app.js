






/**********************************************************/
/*                     FONCTIONS                          */
/**********************************************************/

/*
function onClickButton()
{
    getClientPosition()
        .then(function(position){
            console.log(position.coords.latitude + ' ' + position.coords.longitude);
        })
        .catch(function(error){
            console.error(error);
        });
}
*/

async function onClickButton()
{
    try {
        const position = await getClientPosition();

        console.log(position.coords.latitude + ' ' + position.coords.longitude);
    }
    catch(error) {
        throw new Error(error);
    }

    
}

function getClientPosition()
{
    return new Promise( (resolve, reject) => {

        /*
        navigator.geolocation.getCurrentPosition(function(position){
            resolve(position);
        }, function(error){
            reject(error);
        })
        */
        navigator.geolocation.getCurrentPosition(resolve, reject);
    });
    
}





/**********************************************************/
/*                   CODE PRINCIPAL                       */
/**********************************************************/
const button = document.getElementById('geolocalize-button');

button.addEventListener('click', onClickButton);