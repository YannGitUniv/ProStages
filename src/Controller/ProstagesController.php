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
    public function index()
    {
        return $this->render('prostages/index.html.twig');
    }
	
	
	/**
     * @Route("/ressources/{id}", name="prostages_ressource")
     */
    public function afficherRessourcePeda($id)
    {
        return $this->render('prostages/affichageRessources.html.twig',
		['idRessource' => $id]);
    }
}
