<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    /**
     * @Route("/", name="prostages_accueil")
     */
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig');
    }
	
	
	/**
     * @Route("/ressources/345", name="prostages_ressource345")
     */
    public function afficherRessourcePeda(): Response
    {
        return $this->render('prostages/affichageRessources.html.twig');
    }
}
 