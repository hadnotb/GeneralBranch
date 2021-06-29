////////////////
// Constantes
/////////////

// Pour consrtuire les URLs des liens
const SITE_BASE_URL = 'http://localhost:8000'; // En ayant lancé le serveur interne de PHP pour que les liens fonctionnent

////////////////
// Fonctions
/////////////

/**
 * SOLUTION 1
 * Retourne le code HTML du résumé d'un article
 * @param {Object} article 
 */
function genHTMLArticle(article)
{
    return `<article>
                <h3>${article.title}</h3>
                <a href="${SITE_BASE_URL}/?category=${article.category_id}" class="badge">${article.category_label}</a>
                <p>Date de création : ${article.created_at}</p>
                <div>${article.content}</div>
                <a href="${SITE_BASE_URL}/article?id=${article.article_id}">Lire la suite</a>
            </article>`;
}


/**
 * SOLUTION 2
 * Construit un élément <article> avec les données de l'article à l'intérieur
 * @param {Object} article 
 */
function createArticleElement(article)
{
    const articleElement = document.createElement('article');
    const h3Element = document.createElement('h3');
    const categoryLinkElement = document.createElement('a');
    const readMoreLinkElement = document.createElement('a');
    const divElement = document.createElement('div');
    const pElement = document.createElement('p');

    h3Element.textContent = article.title;
    categoryLinkElement.textContent = article.category_label;
    readMoreLinkElement.href = `${SITE_BASE_URL}/article?id=${article.article_id}`;
    readMoreLinkElement.textContent = 'Lire la suite';
    categoryLinkElement.href = `${SITE_BASE_URL}/?category=${article.category_id}`;
    categoryLinkElement.classList.add('badge');
    divElement.textContent = article.content;

    articleElement.appendChild(h3Element);
    articleElement.appendChild(categoryLinkElement);
    articleElement.appendChild(pElement);
    articleElement.appendChild(divElement);
    articleElement.appendChild(readMoreLinkElement);

    return articleElement;    
}

async function onClickButton()
{
    // On envoie une requête HTTP en GET vers le fichier ajax.php et on récupère la réponse HTTP
    const httpResponse = await fetch('ajax.php');

    // On parse le corps de la réponse (body) qui est en JSON
    const articles = await httpResponse.json();

    // Sélection du conteneur
    const list = document.getElementById('articles-list');

    // On vide le contenu existant pour ne pas le répéter
    list.innerHTML = '';

    // On affiche les articles en construisant le code HTML
    for (const article of articles) {

        // SOLUTION 1
        // Si on crée le code HTML dans une chaîne de caractères...
        // On ajoute le code HTML de l'article à la liste des article

        // document.getElementById('articles-list').innerHTML += genHTMLArticle(article);

        // SOLUTION 2
        // Si on passe plutôt par la création d'un élément avec document.createElement...
        // On ajoute les éléments au DOM

        list.appendChild(createArticleElement(article));
    }
}


////////////////////
// Code principal
/////////////////

// Installation du gestionnaire d'événement au click sur le bouton
document.getElementById('my-button').addEventListener('click', onClickButton);