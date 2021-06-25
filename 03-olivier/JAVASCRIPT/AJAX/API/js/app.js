function onClickButton()
{
    navigator.geolocation.getCurrentPosition(function(position){
        const lattitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        console.log(lattitude);
        console.log(longitude);

    });
}
// // const p = new Promise(function(resolve,reject)
// //                       {



// //                       } );




let boutton = document.querySelector('.button');
let positionAffiche = document.querySelector('.position');
boutton.addEventListener('click', onClickButton)


// const p = new Promise(function(resolve,reject)
//                       {

//                         let nbr = Math.floor( Math.random() * 100);
//                         if(nbr%2 == 0){
//                             resolve(nbr);
//                         }
//                         else{
//                             reject(nbr);
//                         }


//                       });

// p.then(function(result){document.write('Vous avez gagner avec ' + result +' comme chiffre')}).catch(function(error){document.write('Vous avez PERDU avec ' + error +' comme chiffre')});
// function getLocation()
//         {
//             if(navigator.geolocation)
//             {
//                 navigator.geolocation.getCurrentPosition(showPosition);
//             }
//             else
//             {
//                 document.write('Vous vous situez nulle part !!');
//             }
//         }
//         showPosition(position)
//         {
//             const lattitude = position.coords.latitude;
//             const longitude = position.coords.longitude;
//             document.write(lattitude);
//             document.write(longitude);
//         }

//         navigator.geolocation.getCurrentPosition(function(position){
//                     const lattitude = position.coords.latitude;
//                     const longitude = position.coords.longitude;
//                     console.log(lattitude);
//                     console.log(longitude);
            
//                 });




// -----------------------------------------------------Promesses avec geoloc---------------------------------------------------------------------

function getClientPosition()
{
    return new Promise(function(resolve,reject)
    {
        navigator.geolocation.getCurrentPosition(function(position){
            

                  resolve(position);
                  
         });
        
                reject('Vous ne vous trouvez nnulle part')
         
    });
    
}
getClientPosition().then(function(position){document.write('latitude: '+position.coords.latitude+' altitude: '+ position.coords.longitude)}).catch(function(error){document.write(error)});




























