<?php



use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'utilisateurs')]

class User {
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: 'string')]
    private $login;

    #[ORM\Column(type: 'string')]
    private $mdp;

    #[ORM\Column(type: 'string', nullable:true)]
    private $photo;





    public function getId(){
        return $this->id;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function getPhoto() {
        return $this->photo;
    }


    public function setLogin($login){
        $this->login = $login;
    }

    public function setMdp($mdp) {
        $this->mdp = $mdp;
    }

    public function setPhoto ($photo){
        $this->photo = $photo;
    }

}


?>