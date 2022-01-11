<?php


namespace App\Mock;

use App\Entity\Item;
use App\Entity\ToDoList;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;

class Database
{
    private $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function addUser(User $user)
    {
        $userRepository = $this->objectManager->getRepository(User::class);

        $u = $userRepository->persist($user);
    }
}