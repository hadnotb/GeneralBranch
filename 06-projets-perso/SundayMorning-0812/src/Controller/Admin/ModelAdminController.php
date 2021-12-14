<?php

namespace App\Controller\admin;

use App\Framework\FlashBag;
use App\Model\ArticleModel;
use App\Model\CategoryModel;
use App\Framework\AbstractController;
use App\Framework\UserSession;
use App\Model\UserModel;

class ModelAdminController extends AbstractController{

    public function __construct(){

        $this-> articleModel = new ArticleModel;
        $this ->categoryModel = new CategoryModel;
        
    }

    public function model(){
        include LIBRARY_DIR .'/adminCheck.php';
        $models = $this-> articleModel -> getAllModel();
       
        return $this->render('admin/model.admin',[
            'models' => $models
        ]);
    }

    public function addModel(){
        include LIBRARY_DIR .'/adminCheck.php';
        
        if (!empty($_POST)) {

            $productName = trim($_POST['productName']);
            $productPrice = trim($_POST['productPrice']);
            $productDescription = trim($_POST['productDescription']);
            // $productThumbnail = $_FILES['productThumbnail'];
            
            $idCategory = intval($_POST['productCategory']);
            $idBrand = intval($_POST['productBrand']);

            $img=trim($_FILES['productThumbnail']['name']);
            if (!$productName) {
                FlashBag::addFlash('Le champ "Nom du produit" est obligatoire', 'error');
            }

            if (!$productPrice) {
                FlashBag::addFlash('Le champ "Prix" est obligatoire', 'error');
            }

            if (!$productDescription) {
                FlashBag::addFlash('Le champ "Description" est obligatoire', 'error');
            }
            if (!$img) {
                FlashBag::addFlash('Le champ "Image" est obligatoire', 'error');
            }
            if (!$idCategory) {
                FlashBag::addFlash('Le champ "Categorie" est obligatoire', 'error');
            }
            if (!$idBrand) {
                FlashBag::addFlash('Le champ "Marque" est obligatoire', 'error');
            }
            if (!FlashBag::hasMessages('error')) {
                
                // On enregistre les données dans la base
                if ($_FILES['productThumbnail'] && $_FILES['productThumbnail']['error'] == 0)
                {

                    if($_FILES['productThumbnail']['size'] <= 1000000)
                    {
                        // TODO Comment Ajouter d'autre fichier a la table image?

                        $infosfichier = pathinfo($_FILES['productThumbnail']['name']);
                        
                        $extension_upload = $infosfichier['extension'];
                        
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        if (in_array($extension_upload,$extensions_autorisees))
                        {   
                            $filename = $productName.sha1(uniqid(mt_rand(), true)).'.'.$extension_upload;
                            move_uploaded_file($_FILES['productThumbnail']['tmp_name'],PROJECT_DIR."/public/img"."/".$filename);
                        }
                    }
                    // Recuperer le poid avec filesize ou path-info
                    // 
                

                }
               $this -> articleModel->insertModel($productName,$idBrand,$idCategory,$productPrice,$productDescription,$filename,1);
                
                // Message flash
                FlashBag::addFlash('Article ajouté avec succès.');

                // Redirection vers le dashboard admin
                $this->redirect('admin');
            }
            
        }


        $categories = $this -> categoryModel -> getCategories();
        $colors = $this -> categoryModel -> getColors();
        $sizes = $this -> categoryModel -> getSizes();
        $brands = $this -> categoryModel -> getBrands();
        $models = $this -> categoryModel -> getModels();

        

        return $this->render('admin/add/addModel.admin',[
            'categories' => $categories,
            'colors' => $colors,
            'sizes' => $sizes,
            'brands' => $brands,
            'models' => $models,
            
        ]);
    }



    public function editModel(){
        include LIBRARY_DIR .'/adminCheck.php';
        if (!array_key_exists('model_id', $_GET) || ! isset($_GET['model_id']) || !ctype_digit($_GET['model_id'])){
            http_response_code(404); // On modifie le code de status de la réponse HTTP 
            echo '404 NOT FOUND'; // On affiche un message à l'internaute
            exit; // On arrête le script PHP, on n'a plus rien à faire ! 
        }

        $idImage= 1;
        $idMod= (int) $_GET['model_id'];
        $model = $this ->articleModel -> getOneModel($idMod);
        $cat = $this -> categoryModel -> getAllCategories();
        $brands = $this -> categoryModel-> getBrands();
        $imgPat = $model['img'];
        $imgPathToDel = $model['img'];
        // dd($imgPathToDel);
        
        if (!empty($_POST)) {
            $productName= trim($_POST['productName']);
            $idBrand= intval($_POST['productBrand']);
            $idCategorie= intval($_POST['productCategory']);
            $prix= intval($_POST['productPrice']);
            $desc= trim($_POST['productDescription']);
            $imgPat= trim($_FILES['productThumbnail']['name']);
            

            if ($_FILES['productThumbnail'] && $_FILES['productThumbnail']['error'] == 0)
                {

                    if($_FILES['productThumbnail']['size'] <= 1000000)
                    {
                        // TODO Comment Ajouter d'autre fichier a la table image?

                        $infosfichier = pathinfo($_FILES['productThumbnail']['name']);
                        
                        $extension_upload = $infosfichier['extension'];
                        
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        if (in_array($extension_upload,$extensions_autorisees))
                        {   
                            $filename = $productName.sha1(uniqid(mt_rand(), true)).'.'.$extension_upload;
                            move_uploaded_file($_FILES['productThumbnail']['tmp_name'],PROJECT_DIR."/public/img"."/".$filename);
                            $imgToDel = PROJECT_DIR."/public/img"."/".$imgPathToDel;
                            unlink($imgToDel);
                        }
                    }
                   
                }

            
            
            $this -> articleModel->editModel($productName,$idBrand,$idCategorie,$prix,$desc,$filename,$idImage,$idMod);
        }
            

        return $this->render('admin/edit/editModel.admin',[
            
            'idBrand' => $idBrand ?? $model['idMarque'],
            'idMod' => $idMod ?? $model['idModel'],
            'idCategorie' => $idCategorie??$model['idCategorie'],
            'prix' => $prix ?? $model['prix'],
            'desc' => $desc ?? $model['details'],
            'imgPat' => $imgPat?? $model['img'],
            'idImage' => $idImage,
            'productName' => $productName ?? $model['libModel'],
            'model' => $model,
            'categories'=>$cat,
            'brands' => $brands
        ]);
    }

    public function deleteModel(){
        include LIBRARY_DIR .'/adminCheck.php';

        if (!array_key_exists('model_id', $_GET) || ! isset($_GET['model_id']) || !ctype_digit($_GET['model_id'])){
            http_response_code(404); // On modifie le code de status de la réponse HTTP 
            echo '404 NOT FOUND'; // On affiche un message à l'internaute
            exit; // On arrête le script PHP, on n'a plus rien à faire ! 
        }

        $idModel = (int)$_GET['model_id'];
        $result = $this -> articleModel -> deleteModel($idModel);
        print($result ? $idModel : '-1');
    }

}