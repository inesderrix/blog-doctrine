<?php


use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'commentaires')]

class Comment {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: 'string')]
    private $commentaire;

    #[ORM\Column(type: "integer")]
    private $id_auteur;

    #[ORM\Column(type: "integer")]
    private $id_billet;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $date_com;


    public function getId(){
        return $this->id;
    }

    public function getCommentaire(){
        return $this->commentaire;
    }

    public function getIdauteur() {
        return $this->id_auteur;
    }

    public function getIdbillet() {
        return $this->id_billet;
    }

    public function getDatecom(){
        return $this->date_com;
    }

    public function setCommentaire($commentaire){
        $this->commentaire = $commentaire;
    }

    public function setIdauteur($id_auteur) {
        $this->id_auteur = $id_auteur;
    }

    public function setIdbillet($id_billet) {
        $this->id_billet = $id_billet;
    }

    public function setDatecom ($date_com){
        $this->date_com = $date_com;
    }


    public function getAuthorName($authorId) {
    $user = $this->entityManager->getRepository(User::class)->find($authorId);
    return $user ? $user->getLogin() : "Auteur inconnu";
}

}


?>