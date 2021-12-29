<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Item;
use Carbon\Carbon;



class ItemController extends AbstractController
{
    #[Route('/item/create', name: 'item_create')]

    public function add(Item $i){

        if ($i->getName() !== null)
        {


            //$now = new DateTime(); // Date actuelle
            //$diff = $now->diff();
            //$min = $diff->format('%H:%I');



            // if (Carbon::parse($carbon)->createdAt > ) 
            // {
            //     $em = $this->getDoctrine()->getManager();
            //     $em->persist($u);
            //     $em->flush();

            //     return true;

            // }else{
            //     throw new \Exception("Vous avez créé un item il y a moins de 30min");
            // }

           // print_r($min);
            // print_r($carbon);

            return true;

        }else{
            throw new \Exception("Vous devez donner un nom à votre item");
        }
    }



}
