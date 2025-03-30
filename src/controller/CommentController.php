<?php

require 'src/model/Comment.php';

class CommentController{

    private $entityManager;

    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
     public function addComment($commentaire, $id_auteur, $id_billet) {
        if (!empty($commentaire) && !empty($id_auteur) && !empty($id_billet)) {
            $comment = new Comment ();
            $comment->setCommentaire($commentaire);
            $comment->setIdauteur($id_auteur);
            $comment->setIdbillet($id_billet);
            $comment->setDatecom(new \DateTime());

            $this->entityManager->persist($comment);
            $this->entityManager->flush();

            header("Location: index.php?action=accueil");
            exit();
        } else {
            $_SESSION['error'] = "Tous les champs sont obligatoires.";
            header("Location: index.php?action=accueil");
            exit();
        }
    }

    public function getCommentsByPostId($postId) {
    return $this->entityManager->getRepository(Comment::class)->findBy(['id_billet' => $postId], ['date_com' => 'ASC']);
}

public function getAuthorName($authorId) {
    $user = $this->entityManager->getRepository(User::class)->find($authorId);
    return $user->getLogin();
}

}

?>