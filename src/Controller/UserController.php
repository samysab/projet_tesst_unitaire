<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\ToDoList;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        $u = new User();
        $u->setNom("sab");
        $u->setPrenom("samy");
        $u->setEmail("samy@gmail.com");
        $u->setPassword("ardqsdqss");
        $u->setDateNaissance(Carbon::now()->subYears(21));

        $t = new ToDoList();
        $t->setUtilisateurs($u);

        if ($u->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($u);
            $em->persist($t);
            $em->flush();
        }

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
