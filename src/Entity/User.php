<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Carbon\Carbon;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{

    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity=ToDoList::class, mappedBy="utilisateur", cascade={"persist", "remove"})
     */
    private $toDoList;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self{
        $this->id = $id;

        return $this;

    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function isValid(){
        if ($this->email != null && filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            if(strlen($this->getPassword()) > 8 && strlen($this->getPassword()) < 40){
                if ($this->nom != null && $this->prenom != null){

                    $carbon = new Carbon($this->dateNaissance, new \DateTimeZone('Europe/Paris'));

                    if (Carbon::parse($carbon)->age > 12) {
                        $todolist = new ToDoList();
                        $todolist->setUtilisateur($this);

                        print_r($this->getTodolist());
                        return true;
                    }else{
                        throw new \Exception("trop petit");
                    }
                }
            }else{
                throw new \Exception("Le mot de passe doit être compris entre 8 et 40 caracteres");
            }
        }else{
            throw new \Exception("arg manquant");
        }
    }

    public function getToDoList(): ?ToDoList
    {
        return $this->toDoList;
    }

    public function setToDoList(?ToDoList $toDoList): self
    {
        // unset the owning side of the relation if necessary
        if ($toDoList === null && $this->toDoList !== null) {
            $this->toDoList->setUtilisateur(null);
        }

        // set the owning side of the relation if necessary
        if ($toDoList !== null && $toDoList->getUtilisateur() !== $this) {
            $toDoList->setUtilisateur($this);
        }

        $this->toDoList = $toDoList;

        return $this;
    }
}
