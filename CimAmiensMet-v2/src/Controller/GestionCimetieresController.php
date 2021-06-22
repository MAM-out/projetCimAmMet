<?php

namespace App\Controller;

use App\Entity\GestionCimetieres;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionCimetieresController extends AbstractController
{
    /**
     * @Route("/cimetieres", name="gestion_cimetieres")
     */
    public function gestioncimetieres()
    {
        // récupérer tous les cimetieres de la BD
        // et les mettre dans le tableau $cimetieres

    $cimetieres= $this->getDoctrine()->getRepository(GestionCimetieres::class)->findAll();

        return $this->render('gestion_cimetieres/cimetieres.html.twig', [
            'cimetieres' => $cimetieres
        ]);
    }



}
