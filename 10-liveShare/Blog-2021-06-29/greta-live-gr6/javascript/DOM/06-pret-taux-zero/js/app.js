/******************************
 * FONCTIONS
 ******************************/
function onInputRange(event)
{
    /**
     * Rappel : dans un gestionnaire d'événement, 2 moyens de récupérer l'élément déclencheur :
     *    - grâce au mot-clé this
     *    - grâce au paramètre que l'on récupère dans la fonction et à sa propriété currentTarget
     */

    // On récupère le curseur qui a été bougé (l'élément <input> qui a déclenché l'événement)
    const input = event.currentTarget;

    // On récupère la valeur du curseur qui a été bougé
    const value = input.value;

    // On récupère la balise output correspondante
    const output = input.nextElementSibling;

    /**
     * Ou bien pour récupérer l'élément output on peut se servir de son attribut for : 
     * 
     *    const id = input.id;
     *    const output = document.querySelector('output[type="' + id + '"]')
     */

    // On écrit pour terminer la valeur de l'input dans l'output
    output.textContent = currencyFormatter.format(value);

    // Calcul du total et du pourcentage de travaux
    const purchaseAmount = Number(document.getElementById('purchase-amount').value);
    const workAmount = Number(document.getElementById('work-amount').value);

    const total = purchaseAmount + workAmount;
    const workRatio = Math.round((workAmount/total)*100*100)/100;

    // Affichage
    document.getElementById('total').textContent = currencyFormatter.format(total);
    document.getElementById('work-ratio').textContent = workRatio + '%';
}


/******************************
 * CODE PRINCIPAL
 ******************************/

// On sélectionne tous les éléments ayant la classe 'input-range'
const ranges = document.querySelectorAll('.input-range');

// On crée le formateur de devise pour afficher les prix en euros "à la française"
const currencyFormatter = new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR', maximumFractionDigits:0 });

for (const range of ranges) {

    // On installe un gestionnaire d'événement pour l'événement 'input' sur chaque élément <input type="range">
    range.addEventListener('input', onInputRange);

    // On déclenche artificiellement l'événement 'input' pour que la valeur de l'élément <input> soit affichée dès le chargement de la page 
    range.dispatchEvent(new Event('input'));
}