<?php

namespace App\Controller;

use App\Entity\ToDoList;
use App\Entity\User;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{


    #[Route('/user', name: 'user')]
/*    public function index(): Response
    {
        if ($u->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($u);
            $em->flush();

            //Création de la t odo liste automatiquement
            $todol = new ToDoList();
            $todol->setUtilisateur($u);

            $tm = $this->getDoctrine()->getManager();
            $tm->persist($todo);
        }

        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }*/

    #[Route('/user-create', name: 'user')]
    public function isValid(User $u){
        if ($u->getEmail() != null && filter_var($u->getEmail(), FILTER_VALIDATE_EMAIL)){
            if(strlen($u->getPassword()) > 8 && strlen($u->getPassword()) < 40){
                if ($u->getNom() != null && $u->getPrenom() != null){

                    $carbon = new Carbon($u->getDateNaissance(), new \DateTimeZone('Europe/Paris'));

                    if (Carbon::parse($carbon)->age > 12) {
                        $em = $this->getDoctrine()->getManager();
                        $em->persist($u);
                        $em->flush();
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
}
