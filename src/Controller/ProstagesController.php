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
     * @Route("/stages/{id}", name="prostages_stages")
     */
    public function afficherStages($id)
    {
        return $this->render('prostages/affichageStages.html.twig',
		['idStage' => $id]);
    }
	
	
	/**
     * @Route("/entreprises", name="prostages_entreprises")
     */
    public function afficherEntreprises ()
    {
        return $this->render('prostages/affichageEntreprises.html.twig');
    }
	
	
	/**
     * @Route("/formations", name="prostages_formations")
     */
    public function afficherFormations ()
    {
        return $this->render('prostages/affichageFormations.html.twig');
    }
}
