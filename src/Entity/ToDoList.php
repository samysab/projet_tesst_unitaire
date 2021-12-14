<?php

namespace App\Entity;

use App\Repository\ToDoListRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="toDoList", cascade={"persist", "remove"})
     */
    private $utilisateurs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtilisateurs(): ?User
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(?User $utilisateurs): self
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }
}
