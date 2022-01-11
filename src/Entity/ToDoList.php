<?php

namespace App\Entity;

use App\Repository\ToDoListRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use DateTime;
date_default_timezone_set('Europe/Paris');

/**
 * @ORM\Entity(repositoryClass=ToDoListRepository::class)
 */
class ToDoList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Item::class, mappedBy="todolist")
     */
    private $items;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="toDoList", cascade={"persist", "remove"})
     */
    private $utilisateur;

    public function __construct()
    {
        $this->items = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @return Collection|Item[]
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function addItem(Item $item): self
    {
        if (!$this->items->contains($item)) {
            $this->items[] = $item;
            $item->setTodolist($this);
        }

        return $this;
    }

    public function removeItem(Item $item): self
    {
        if ($this->items->removeElement($item)) {
            // set the owning side to null (unless already changed)
            if ($item->getTodolist() === $this) {
                $item->setTodolist(null);
            }
        }

        return $this;
    }

    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function canAddItem(Item $item)
    {
        $today = new DateTime();
        $lastItem = $this->getLastItem();


        $diff = strtotime(date('Y-m-d H:i:s')) - strtotime($item->getCreatedAt());

        if(is_null($item) || !$item->isValidItem()){
            throw new \Exception('L\'item est nul ou invalide');
        }

        if(is_null($this->getUtilisateur()) || !$this->getUtilisateur()->isValid())
        {
            throw new \Exception('L\'utilisateur est nul ou invalide');
        }

        if($this->getSizeTodoList() >= 10)
        {
            throw new \Exception('La todo list possède beaucoup d\'item');
        }

        if(($diff/60) < 30 ){
            throw new \Exception('Le délai est trop court pour créer un autre item');
        }

        return true;
    }

    public function getSizeTodoList()
    {
        return sizeof($this->getItems());
    }

    public function getLastItem()
    {
        return $this->getItems()->last();
    }

}
