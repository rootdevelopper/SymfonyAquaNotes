<?php
/**
 * Created by PhpStorm.
 * User: hceudev
 * Date: 5/20/18
 * Time: 2:13 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends AbstractController
{
    /**
     * @Route("/genus/{genusName}")
     */

//    wild card {genusName} should match the parameter name $genusName

    public function showAction($genusName)
    {
        // Symfony v 3 changed - use Abstract Controller instead of Controller

        $notes = [
            'I saw an Octopus',
            'Octopus offered Octupi',
            'Raspberry Pi I said',
            'Octor RPI'
        ];

        return $this->render('genus/show.html.twig', array(
            'name' => $genusName,
            'notes' => $notes
        ));

    }
}