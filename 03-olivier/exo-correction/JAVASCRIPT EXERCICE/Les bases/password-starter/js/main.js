'use strict';

let password = window.prompt("Veuillez entrez vote mot de passe");
console.log(password);

let longueurmdp = password.trim().length ;
console.log(longueurmdp);

if(longueurmdp == 0){

    alert("Erreur vous n'avez rien rentrer");

}
else{
    document.write(password);
    if(password.length < 8 ){
        alert("La longueur doit faire plus de 8 caractere");
    }
    if(password.length > 12 ){
        alert("La longueur doit faire moins de 12 caractere");
    }
    if(!isNaN(password.charAt(0))){
        alert("Le premier caractere ne doit pas etre un chiffre");
    }
    if(length >= 8 && length <= 12){
        alert("la longueur est correcte");
    }  
}
