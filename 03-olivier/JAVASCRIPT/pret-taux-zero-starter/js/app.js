/******************************
 * FONCTIONS
 ******************************/
function onInputRange(event){

  
  // 1) Récup la valeur de l'input concerné
  // this.
  const value = event.currentTarget.value;
  console.log(value);

  // plusieur moyens de récuperer l'output : 
  // event.currentTarget.nextSibling === le noeud suivant
  // event.currentTarget.parentNode === le nooeud parent
  // event.currentTarget.nextElementSibling === le noued 'element suivant
  // Ou alors je récupere l'output grace a l'attribue for de l'input et de l'output :
  const id = event.currentTarget.id;
  const output = document.querySelector('output[for="'+id+'"]');
      // 2) Ecrire la baleur dans la balise output
        output.textContent = Intl.NumberFormat('de-DE', { style: 'currency', currency: 'EUR' }).format(value);

        const Achat = Number(document.getElementById('prixAchat').value);
        const Travaux = Number(document.getElementById('coutTravaux').value);
        const total = Achat + Travaux;
        const workRatio = Math.round(((Achat/total)*100)*100)/100; // Tout ca c'est pour arrondir a deux chiffre aprés la virugle 
        //Affichage
        document.getElementById('total').textContent = total;
        document.getElementById('rate').textContent = workRatio;
}


/******************************
 * CODE PRINCIPAL
 ******************************/
 const ranges = document.querySelectorAll(".input-range");

 for(const range of ranges){
    range.addEventListener('input',onInputRange);
    range.dispatchEvent(new Event('input'));
 };

 


 

  

  








 /////////////////////////////////RECHERCHE///////////////////////////////////////// -->
//  (function() {

//     var parent = document.querySelector(".price-slider");
//     if(!parent) return;
  
//     var
//       rangeS = parent.querySelectorAll("input[id=range]"),
//       numberS = parent.querySelectorAll("input[type=number]");
  
//     rangeS.forEach(function(el) 
//     {
//         el.oninput = function() 
//         {
//               let slide1 = parseFloat(rangeS[0].value),
//                   slide2 = parseFloat(rangeS[1].value);
    
//                 if (slide1 > slide2) 
//                 {
//                     [slide1, slide2] = [slide2, slide1];
//                 }
    
//           numberS[0].value = slide1;
//           numberS[1].value = slide2;
//         }
//     });
  
//     numberS.forEach(function(el) {
//       el.oninput = function() {
//           var number1 = parseFloat(numberS[0].value),
//           number2 = parseFloat(numberS[1].value);
  
//         if (number1 > number2) {
//           var tmp = number1;
//           numberS[0].value = number2;
//           numberS[1].value = tmp;
//         }
  
//         rangeS[0].value = number1;
//         rangeS[1].value = number2;
  
//       }
//     });
  
//   })();
   /////////////////////////////////RECHERCHE///////////////////////////////////////// -->
















