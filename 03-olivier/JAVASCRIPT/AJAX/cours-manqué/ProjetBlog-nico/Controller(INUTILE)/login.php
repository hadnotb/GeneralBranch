<!-- <?php //

// use App\Model\UserModel;
// use App\Framework\FlashBag;
// use App\Framework\UserSession;



// // Si le formulaire de connexion a été rempli ... 

// if (!empty($_POST))
// {
//     // On récupère les données dans des variables. ATTENTION /!\, pas de trim(), car c'est à l'utilisateur de rentrer les BONNES informations car lui seul les connaît.
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     // Appel de de UserModel et de la fonction checkcredentials() qui prend en paramètre l'email de l'utilisateur et son mot de passe.
//     $userModel = new UserModel();
//     $user = $userModel->checkCredentials($email, $password);

//     if (!$email)
//     {
//         FlashBag::addFlash("Le champ email n'a pas été rempli.", 'error');
//     }
//     if (!$password)
//     {
//         FlashBag::addFlash("Le champ mot de passe n'a pas été rempli", 'error');
//     }

//     // S'il y a un problème avec l'utilisateur après l'exécution de la fonction checkcredentials dans le $user...
//     if (!$user) 
//     {
//         FlashBag::addFlash("Identifiants incorrects", 'error');
//     }
//     else // S'il n'y a pas de problème ... 
//     {

//         // Alors on enregistre l'utilisateur en session à partir de la fonction register de UserSession.php :
//         UserSession::register($user['id'], $user['firstname'], $user['lastname'], $user['email']);

//         FlashBag::addFlash("Connexion réussie bienvenue !", 'success');

//         // Redirection
//         header('Location: '.buildUrl('homepage'));
//         exit;
//     }
// }

// // AFfichage.
// return render('login');


