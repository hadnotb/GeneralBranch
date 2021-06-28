<!-- <?php //

// use App\Model\ArticleModel;
// use App\Model\CategoryModel;

// // On vérifie si la catégorie existe. 

// $categoryId = null;
// if (array_key_exists('category', $_GET) && isset($_GET['category']) && ctype_digit($_GET['category'])) {
//     $categoryId = $_GET['category'];
// }

// $articleModel = new ArticleModel();
// $articles = $articleModel->getAllArticles($categoryId);

// $category = null;
// if ($categoryId) {
//     $categoryModel = new CategoryModel();
//     $category = $categoryModel->getOneCategory($categoryId);
// }

// // Affichage : inclusion du template
// return render('home', [
//     'articles' => $articles,
//     'category' => $category
// ]);