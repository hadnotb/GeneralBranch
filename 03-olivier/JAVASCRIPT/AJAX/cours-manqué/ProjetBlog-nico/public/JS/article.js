//////////////////////////////////////////////////////
// FONCTION AJAX PERMETTANT l'AJOUT DE COMMENTAIRE //
////////////////////////////////////////////////////

async function addCommentWhenSubmit(event)
{
    // On arrête le comportement par défaut du navigateur via la fonction JavaScript preventDefault(). Cette fonction prend en paramètre event. 
    event.preventDefault()

    // On va chercher les données du formulaire en créant un objet FormData

    const formData = new FormData(form)


    // On récupère l'action du formulaire : ce sera l'URL vers laquelle on enverra la requête AJAX

    const url = form.action


    // Construction des options de la requête AJAX avec la méthode POST et le body contenant le formData
    const options = {
        method: 'post',
        body: formData
    };

    // On envoie une requête AJAX vers l'URL de l'action du formulaire en POST en transmettant les données du formulaire dans le body
    const response = await fetch(url, options);
    const htmlComment = await response.text();
    console.log(htmlComment);

    // Lors de la réception de la réponse, on insère simplement le code HTML reçu en haut de la liste des commentaires

    console.log('COMMENTAIRE AJOUTÉ')
}

const form = document.getElementById('add-comment-form')

form.addEventListener('click', addCommentWhenSubmit)