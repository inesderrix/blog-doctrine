<?php

require 'src/model/Post.php';


class PostController{

    private $entityManager;

    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    public function createPost($titre, $contenu)
    {
        if (!empty($titre) && !empty($contenu)) {
            $post = new Post();
            $post->setTitre($titre);
            $post->setContenu($contenu);
            $post->setDate(new \DateTime());

            $this->entityManager->persist($post);
            $this->entityManager->flush();

            header("Location: index.php?action=accueil");
            exit();
        } else {
            $_SESSION['error'] = "Le titre et le contenu sont obligatoires.";
            header("Location: index.php?action=nouveau-billet");
            exit();
        }
    }
    public function getPosts($afficherTous = false) {
        $repo = $this->entityManager->getRepository(Post::class);
        
        if ($afficherTous) {
            return $repo->findBy([], ['date' => 'DESC']); 
        } else {
            return $repo->findBy([], ['date' => 'DESC'], 3);
        }
    }

    public function getPostById($id) {
        return $this->entityManager->find(Post::class, $id);
    }

    public function updatePost($id, $titre, $contenu) {
        $post = $this->entityManager->find(Post::class, $id);

        if ($post) {
        
            
            $post->setTitre($titre);
            $post->setContenu($contenu);
            $post->setDate(new \DateTime()); 
            
            $this->entityManager->persist($post);
            $this->entityManager->flush();
        }
    }

    public function deletePost($id) {
        $post = $this->entityManager->find(Post::class, $id);

        if ($post) {
            $this->entityManager->remove($post);
            $this->entityManager->flush();
        }
    }

    public function getCommentsForPost($postId) {
    $commentController = new CommentController($this->entityManager);
    return $commentController->getCommentsByPostId($postId);
}

    
}