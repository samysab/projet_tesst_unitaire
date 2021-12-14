<?php

namespace App\Controller;

use App\Entity\User;
use Carbon\Carbon;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    public function isValid(){
        if ($this->email != null && filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            if ($this->nom != null && $this->prenom != null){

                $carbon = new Carbon($this->dateNaissance, new DateTimeZone('Europe/Paris'));

                if (Carbon::parse($carbon)->age > 12) {
                    return true;
                }else{
                    throw new Exception("trop petit");
                }
            }
        }else{
            throw new Exception("arg manquant");
        }
    }
}
