// let nombre ;
// // {
// //     nombre = window.prompt("un nombre svp ");
// // }
// // console.log("ok");


// // do{ nombre = window.prompt("un nombre svp ");}while(isNaN(nombre));

// // do
// // {
// //     nombre = parseInt(window.prompt("un nombre entre 1 et 10 svp"));
// // }

// // while(isNaN(nombre)||nombre<0||nombre>10);
// // console.log("ok");
// let count = 0 ;
// let juste = (Math.floor(Math.random()*100));
// console.log(juste);
// // let nombre = window.prompt("Devinez le juste prix")
// do
// {
    
//     nombre = window.prompt("devinez le juste prix");
   
//     if (isNaN(nombre)||!nombre)
//     {
//         alert("Erreur vous n'avez pas entrer une valeur valide");
//         continue ;
//     } 
//     count ++;
//     if(nombre > juste)
//     {
//         alert("en dessous");
//         continue ;
        
//     }
//     if( nombre < juste)
//     {
// //         alert("au dessus");
        
// //     }
    
   
// // }
// // while(juste != nombre)
// // if (juste = nombre)
// // {
// //     alert("t'a gagner en " + count + " fois poto");
// // }
// function sayhello(name="world")
// {
//     let msg = "hello "+ name;
// }
// let user = prompt("nom?")



// let sum =0;
// function faireLaSommeDesElements()
// {
//     for(let compteur =0 ; compteur < tab.length ;compteur ++)
//     {
//         sum += tab[compteur];
//         console.log(sum);
        
// //     }
// // }
// // faireLaSommeDesElements();
// // console.log(sum);
// // COOOORRREEEECCCTIIIIIOOOONNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNNN
// function arraySum(array)
// {
//     let sum = 0;
//     for (let i=0; i<array.length;i++)
//     {
//         sum+= array[i];
       
//     } 
//     return sum;
// }
// let tab = [12,3,4,6,78,54,2,4,64,4];
// let result = arraySum(tab);
// console.log(result);

function chronometreAffiche()
{
    counter = 10;
    for(counter = 10; counter > 0;counter--)
    {
        console.log(counter)
    } 
}

chronometreAffiche();

// function bip() {
//     counter--;
//     if(counter == 0) finish();
//     else {	
//         document.getElementById("bip").innerHTML = counter + " secondes restantes";
//     }	
// }
// function start(){
//   intervalId = setInterval(bip, 1000);