<?php

namespace App\Controller\Admin;

use App\Framework\AbstractController;
use App\Framework\FlashBag;
use App\Model\CategoryModel;
use App\Model\ArticleModel;
use App\Framework\UserSession;

class ArticleController extends AbstractController
{
    // Fonction permettant l'ajout d'un nouvel article dans le blog.
    public function new()
    {
        // Si le POST n'est pas vide :
        if (!empty($_POST))
        {
            // On récupère les données du formulaire dans des variables. trim() est une fonction PHP qui retire les espaces :
            // Dans $_POST on place dans le tableau le name="" du fichier du formulaire phtml. Si dans le fichier du formulaire phtml on a name="title", alors ici, $_POST['title']. 
            $title = trim($_POST['title']);
            $category = trim($_POST['category']);
            $content = trim($_POST['content']);

            // On vérifie la validation des données insérées par l'utilisateur. 

            // S'il n'y a RIEN inséré par l'utilisateur dans titre => name="title" => $_POST['title'] :
            if (!$title)
            {
                // On affiche le message d'erreur.
                FlashBag::addFlash("Le champ du nom n'a pas été rempli.", 'error'); 
            }
            if (!$category)
            {
                FlashBag::addFlash("Le champ catégorie n'a pas été renseigné.", 'error'); 
            }
            // S'il n'y a RIEN inséré par l'utilisateur dans le contenu => name="content" => $_POST['content'] :
            if (!$content)
            {
                // On affiche le message d'erreur.
                FlashBag::addFlash("Le contenu de l'article est vide.", 'error'); 
            }


            // S'il N'Y A PAS d'erreurs dans le formulaire reçu, et que les erreurs ne sont pas présentes :
            if (!(FlashBag::hasMessages('error')))
            {
                // On peut procéder à l'insertion de l'article dans la base de données. 
                // On créé une variable qui va faire appel à un nouvel objet de ArticleModel.
                // Cette variable, ici, $articleModel, va procéder à l'appel de la fonction insert dans ArticleModel, qui prend en paramètre le titre, le contenu et la catégorie de l'article à insérer en base de données.

                $articleModel = new ArticleModel();
                $articleModel->insert($title, $content, $category, UserSession::getId());

                // Message de Succès pour l'insertion du nouvel article : 
                FlashBag::addFlash("Votre nouvel article a bien été ajouté !", 'success'); 

                // Redirection vers le Tableau de bord Admin.
                $this->redirect('admin');
            }
        }
        // Dans tous les cas... il faut aller chercher les catégories pour afficher la liste déroulante des catégories qui se trouvent dans la base de données. 
        $categoryModel = new CategoryModel();
        // On récupère dans la variable $categories l'objet d'une part, et l'exécution de la fonction gettAllCategories() provenant de CategoryModel qui est une requête SQL.
        $categories = $categoryModel->getAllCategories();

        // Affichage du template. Le second paramètre permet de faire rentrer les variables dans le template. Clé => valeur dans le tableau associatif. 
        return $this->render('admin/article/new', [
            'categories' => $categories,
            'title' => $title??'',
            'content' => $content??'',
            'selectedCategory' => $category??null
        ]);
    }
    public function editArticle()
    {
        // On sélectionne l'id de l'article.
        $id = $_GET['id'];
        // Si le POST n'est pas vide :
        if (!empty($_POST))
        {
            // On récupère les données du formulaire dans des variables. trim() est une fonction PHP qui retire les espaces :
            // Dans $_POST on place dans le tableau le name="" du fichier du formulaire phtml. Si dans le fichier du formulaire phtml on a name="title", alors ici, $_POST['title']. 
            $title = trim($_POST['title']);
            $category = trim($_POST['category']);
            $content = trim($_POST['content']);

            // On vérifie la validation des données insérées par l'utilisateur. 

            // S'il n'y a RIEN inséré par l'utilisateur dans titre => name="title" => $_POST['title'] :
            if (!$title)
            {
                // On affiche le message d'erreur.
                FlashBag::addFlash("Le champ du nom n'a pas été rempli.", 'error'); 
            }
            if (!$category)
            {
                FlashBag::addFlash("Le champ catégorie n'a pas été renseigné.", 'error'); 
            }
            // S'il n'y a RIEN inséré par l'utilisateur dans le contenu => name="content" => $_POST['content'] :
            if (!$content)
            {
                // On affiche le message d'erreur.
                FlashBag::addFlash("Le contenu de l'article est vide.", 'error'); 
            }


            // S'il N'Y A PAS d'erreurs dans le formulaire reçu, et que les erreurs ne sont pas présentes :
            if (!(FlashBag::hasMessages('error')))
            {

                // On peut procéder à l'insertion de l'article dans la base de données. 
                // On créé une variable qui va faire appel à un nouvel objet de ArticleModel.
                // Cette variable, ici, $articleModel, va procéder à l'appel de la fonction edit dans ArticleModel, qui prend en paramètre le titre, le contenu et la catégorie de l'article à modifier en base de données.
                $articleModel = new ArticleModel();
                $articleModel->edit($title, $content, $category, $id);

                // Message de Succès pour la modification de l'article : 
                FlashBag::addFlash("Votre article a bien été modifié !", 'success'); 

                // Redirection vers le Tableau de bord Admin.
                $this->redirect('admin');
            }
        }

        $articleModel = new ArticleModel;
        $article = $articleModel->getOneArticle($id);

        // Dans tous les cas... il faut aller chercher les catégories pour afficher la liste déroulante des catégories qui se trouvent dans la base de données.
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();

       

        return $this->render('admin/article/edit', [
            'categories' => $categories,
            'title' => $title??'',
            'content' => $content??'',
            'selectedCategory' => $category??null,
            'article' => $article
        ]);
    }
    // Fonction permettant la suppression d'un article. 
    public function delete()
    {
        // On sélectionne l'id de l'article.
        $id = $_GET['id'];

        $articleModel = new ArticleModel();
        $articleModel->delete($id);

        // Message Flash
        // FlashBag::addFlash('Article supprimé');

        // Redirection
        // $this->redirect('admin');
        echo ($id);
    }
}