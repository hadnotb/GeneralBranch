/////////////////////////////////////////////////////////////////
// CODE JAVASCRIPT SUR LE BOUTON SUPPRESSION ARTICLE DE ADMIN // 
///////////////////////////////////////////////////////////////

// On récupère en paramètre l'objet qui représente l'événement : event.
async function deleteArticle(event)
{
    // On annule le comportement par défaut du navigateur
    event.preventDefault();
    
    // On affiche une boîte de dialogue de confirmation et on récupère la réponse de l'internaute
    const confirmation = window.confirm('Êtes-vous certain de vouloir supprimer cet article ?');

    // Si l'internaute confirme effectivement la suppression :
    if (confirmation) 
    {
        // VERSION 1 : Redirection, on change de page.
        // On redirige l'internaute vers la suppression en allant chercher le href du lien cliqué :
        // window.location.replace(this.href);
        // Syntaxe alternative : event.currentTarget, qui cible l'élément courant.


        // VERSION 2 : on envoie une requête AJAX avec la fonction fetch

        // On récupère la page sur laquelle on supprime l'article. Ici, la direction de la page de suppression. 
        const response = await fetch(this.href);
        
        // On récupère dans la variable id l'id de l'article à supprimer.
        const id = await response.text();

        // On récupère le tr à supprimer dans le fichier admin.phtml. 
        let tr = document.getElementById('article-' + id);

        // On supprime le tr grâce à la fonction JavaScript remove(). 
         // Lors de la récéption de la réponse, on récupère l'id de l'article supprimé pour supprimer le <tr> correspondant
        tr.remove();

        alert('Article supprimé')

    }
}

// CODE PRINCIPAL 

// On sélectionne toutes les classes de delete-button du DOM :
let buttons = document.querySelectorAll('.delete-button')


// On parcourt tous les boutons dans une boucle for :
for (let i = 0 ; i < buttons.length ; i++)
{
    // On installe le gestionnaire sur le buttons en prenant en index le ième élément, puis on installe le click, et la fonction qu'on appelle.
    buttons[i].addEventListener('click', deleteArticle)
}