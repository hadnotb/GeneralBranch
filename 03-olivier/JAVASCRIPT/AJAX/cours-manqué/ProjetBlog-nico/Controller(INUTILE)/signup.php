<!-- <?php //

// use App\Model\UserModel;
// use App\Framework\FlashBag;

// // Si le formulaire a été rempli ... 

// if (!empty($_POST))
// {
//     // On récupère les données du formulaire dans des variables.

//     $firstname = trim($_POST['firstname']);
//     $lastname = trim($_POST['lastname']);
//     $email = trim($_POST['email']);
//     $password = trim($_POST['password']);

//     $newUser = new UserModel();

//     // Validation du formulaire : Pour chaque erreur on ajoute un message flash suivi du type comme dans FlashBag.php le AddFlash. 
//     if (!$firstname)
//     {
//         FlashBag::addFlash("Le champ prénom n'a pas été rempli.", 'error');
//     }
//     if (!$lastname)
//     {
//         FlashBag::addFlash("Le champ nom n'a pas été rempli.",'error');
//     }
//     if (!$email)
//     {
//         FlashBag::addFlash("Le champ email n'a pas été rempli.", 'error');
//     }
//     if  ($newUser->getUserByEmail($email))
//     {
//         FlashBag::addFlash('Il existe déjà un compte avec cet email','error');  
//     }
//     if (!$password)
//     {
//         FlashBag::addFlash("Le champ mot de passe n'a pas été rempli", 'error');
//     }
//     // Longueur du mot de passe inférieure à 8 caractères avec la propriété strlen() de PHP.
//     if (strlen($password) < 8)
//     {
//         FlashBag::addFlash("Le champ mot de passe comporte moins de 8 caractères", 'error');
//     }
//     // S'il n'y a pas d'erreurs (pas de messages flashs de type 'error') ... 
//     if (!(FlashBag::hasMessages('error')))
//     {
//         // ... On va hasher le mot de passe. Password_hash(‘mot de passe de l’utilisateur’, PASSWORD_DEFAULT). Cette fonction prend en paramètre le mot de passe de l’utilisateur qu'il a inséré dans le formulaire d'inscription ainsi que l’algorithme de PHP à savoir PASSWORD_DEFAULT...

//         $hash = password_hash($password, PASSWORD_DEFAULT);

//         // ... puis on fait appel au UserModel pour insérer les données dans la table user de la Base de Données et à sa fonction en lui donnant en paramètre les données insérées par l'utilisateur. Pour cela, on la range dans une variable préalable. Et on prend à la place du mot de passe, le $hash.
//         $newUser->createUser($firstname, $lastname, $email, $hash);

//         // On ajoute un message flash de succès
//         FlashBag::addFlash("Le formulaire de création du compte a bien été rempli, vous pouvez vous connecter.", 'success');

//         // Et on redirige l'internaute vers la page d'accueil.
//         header('Location: ' . buildUrl('homepage'));
//         exit;
//     }
// }

// // Affichage. avec les variables du tableau associatif, on fait réapparaître ce qu'on a inséré s'il y a une erreur.
// return render('signup', [
//     'firstname' => $firstname??'',
//     'lastname' => $lastname??'',
//     'email' => $email??''
// ]);