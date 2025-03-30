<?php

require 'src/model/User.php';


class UserController 
{
   private $entityManager;
   
   public function __construct($entityManager)
   {
        $this->entityManager=$entityManager;
   }

   public function add_user($login, $mdp)
   {
        $user = new User();
        $user->setLogin($login);
        if (!empty($mdp)) {
                    $hashedPassword = password_hash($mdp, PASSWORD_BCRYPT);
        $user->setMdp($hashedPassword);
        }
        $this->entityManager->persist($user);
        $this->entityManager->flush();
   }

    public function deleteUser($id)
    {
        $user = $this->entityManager->find(User::class, $id);
        if ($user) {
            $this->entityManager->remove($user);
            $this->entityManager->flush();
        }
    }

       public function traitelogin( $login, $password)
    {
        $userController = $this->entityManager->getRepository(User::class);
        $user = $userController->findOneBy(['login' => $login]);
        
        if (!$user) {
            $_SESSION['login_error'] = "Login incorrect";
            return false;
        }

        if (!password_verify($password, $user->getMdp())) {
              $_SESSION['login_error'] = "Mot de passe incorrect";
            return false;
        }

        $_SESSION['id'] = $user->getId();
        $_SESSION["login"] = $user->getLogin();
        
        

        return true;
    }

    public function isConnected(){
        return isset($_SESSION["login"]) && isset($_SESSION["id"]);
   }
    public function isAdmin(){
        return isset($_SESSION['id']) && $_SESSION['id'] == 1;
    }

   
}

?>