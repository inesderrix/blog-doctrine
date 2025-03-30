<?php



use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'billets')]

class Post {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: 'string')]
    private $titre;

    #[ORM\Column(type: 'string')]
    private $contenu;

    #[ORM\Column(type: 'datetime', nullable:true)]
    private $date;


    public function getId(){
        return $this->id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function getDate(){
        return $this->date;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    public function setDate ($date){
        $this->date = $date;
    }

}


?>