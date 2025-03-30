<?php
// index.php
session_start();

require_once 'bootstrap.php';
require 'src/controller/UserController.php';
require 'src/controller/PostController.php';
require 'src/controller/CommentController.php';

  
    $userController = new UserController($entityManager);
    $isConnected = $userController->isConnected();
    $isAdmin = $userController->isAdmin();
          $postController = new PostController($entityManager);


$action = $_GET['action'] ?? 'connexion';  

switch ($action) {

    // formulaire de connexion
    case 'connexion':
        require 'src/view/connexion.php';
        exit();
        break;

    // traite la connexion
    case 'traitelogin':
        if (isset($_POST['login']) && isset($_POST['mdp'])) {
    
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            
            
            $userController->traitelogin($login, $mdp);
             $isConnected = $userController->isConnected();
            if (!$isConnected) {
        
            header("Location: index.php?action=connexion");
            exit();
            }
            
               
                    header("Location: index.php?action=accueil");
                exit();
            
                
                
           
        }
        break;
    case 'inscription-view':
            require 'src/view/inscription.php';
            break;
    
    // traite inscription
    case 'inscription':
        
       
        $login = $_POST['login'];
        $mdp = $_POST['mdp'];

        
        $UserController = new UserController($entityManager);
        $UserController->add_user($login, $mdp);
        $UserController->traitelogin($login, $mdp);
    
        header("Location: index.php?action=accueil");
        exit();
    
        
        break;

   

    // Accueil 
    case 'accueil':
      
   
    $afficherTous = isset($_GET['afficher']) && $_GET['afficher'] === 'all';

$posts = $postController->getPosts($afficherTous);
$commentController = new CommentController($entityManager);



        require 'src/view/acceuil.php';
    

        break;

    // Déconnexion
    case 'deconnexion':
        session_destroy();
        header('Location: index.php?action=connexion');
        exit();
        break;

    // mention
    case 'mention':
        require 'src/view/mention.php';
        break;
   
    //billet
     case 'nouveau-billet':
        require 'src/view/nouveau_billet.php';
        break;

    case 'ajouter-billet':
        $postController = new PostController($entityManager);
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $postController->createPost($_POST["titre"], $_POST["contenu"]);
        }
        break;

    //modifier
    case 'modifier';
    $postController = new PostController($entityManager);
    $post = $postController->getPostById($_GET['id']);

        require 'src/view/modifier_billet.php';  
        break;

    case 'traite-modification';
     $postController = new PostController($entityManager);
     $postController->updatePost($_POST['id'], $_POST['titre'], $_POST['contenu']);
     header("Location: index.php?action=accueil");
            exit();
             break;

    case 'supprimer':
         $postController = new PostController($entityManager);
         $postController->deletePost($_GET['id']);
         header("Location: index.php?action=accueil");
    exit();
    break;

        
     case 'ajouter-commentaire':
  

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $commentController = new CommentController($entityManager);
        $commentaire = $_POST['commentaire'];
        $id_auteur = $_SESSION['id']; 
        $id_billet = $_POST['id_billet'];

        $commentController->addComment($commentaire, $id_auteur, $id_billet);
          header("Location: index.php?action=accueil");  // Redirection vers le billet
        exit(); 
         
    } else {
        include 'src/view/ajouter_commentaire.php';
       
        exit();
    }
   
    break;
    
}
?>
