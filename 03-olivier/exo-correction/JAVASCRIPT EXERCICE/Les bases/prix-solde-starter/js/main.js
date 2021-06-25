'use strict';   // Mode strict du JavaScript
const TxTVA = 20.0;
let montantHT;
let montantTVA;
let pourcRemise;
let montantTTC;

montantHT = parseFloat(prompt("Veuillez entrez le montant"));
const presenceRemise = prompt("Voulez vous une remise ?");

if(presenceRemise == "yes" || presenceRemise =='oui'){

    pourcRemise = parseFloat(prompt("Veuillez entrez le montant de la remise"));
    if(isNaN(pourcRemise) || pourcRemise>100){

        alert("ERRRRROOOOOOOOORRR");
    }
    montantHT = montantHT - (montantHT * pourcentageRemise / 100);
    
}

montantTVA = (montantHT * TxTVA) /100;
montantTTC = montantHT + montantTVA ;

if(presenceRemise == "yes" || presenceRemise =='oui'){

    alert(pourcRemise);
}
else{
    alert("Aucune remise n'a été appliqué");
}












