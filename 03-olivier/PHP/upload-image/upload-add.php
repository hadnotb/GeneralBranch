<?php



function new(){

        // Protection de l'administration
        if(!UserSession::hasRoles('admin', 'editor')){
            http_response_code(403);
            echo 'Accès interdit';
            exit;
        }

        // Si le formulaire est soumis 
        if(!empty($_POST)){

            // On récupère les données du formulaire
            $title = trim($_POST["title"]); 
            $content = trim($_POST["content"]); 
            $category = trim($_POST["category"]);
            $user = trim($_POST["user"]);
            $image = trim($_FILES['image']['name']);
            // dump($_FILES['image']);
            // dump($_POST['image']);

            if (!$title){
                FlashBag::addFlash('Le champ titre est obligatoire.', 'error');
            }

            if (!$content){
                FlashBag::addFlash('Le champ contenu est obligatoire.', 'error');
            }

            if (!$category){
                FlashBag::addFlash('Le champ catégorie est obligatoire.', 'error');
            }

            if(!FlashBag::hasMessages('error')){

                // On enregistre les données dans la base
                $newArticleModel = new ArticleModel();
                $newArticleModel->insertArticle($title, $content, $category, $user, $image);

                if ($_FILES['image'] && $_FILES['image']['error'] == 0){

                    if($_FILES['image']['size'] <= 1000000){

                        $infosfichier = pathinfo($_FILES['image']['name']);
                        // dump($infosfichier);
                        $extension_upload = $infosfichier['extension'];
                        // dump($extension_upload);
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                        
                        if (in_array($extension_upload,$extensions_autorisees)){
                            move_uploaded_file($_FILES['image']['tmp_name'],PROJECT_DIR."/public/img"."/".$image);
                        }
                    }
                }

                FlashBag::addFlash('Votre article a été correctement ajouté.');

                // Redirection vers le dashboard admin
                $this->redirect('admin');
            }

        }

        // Dans tous les cas... il faut aller chercher les catégories pour afficher la liste déroulante
        $catModel = new CategoryModel();
        $categories = $catModel->getAllcategories();

        return $this->render('admin/article/new',[
            'categories'=> $categories??'',
            'content'=> $content??'',
            'title'=> $title??''
        ]);

    }
