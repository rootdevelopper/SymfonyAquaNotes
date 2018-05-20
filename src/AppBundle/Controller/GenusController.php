<?php
/**
 * Created by PhpStorm.
 * User: hceudev
 * Date: 5/20/18
 * Time: 2:13 AM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GenusController
{
    /**
     * @Route("/genus")
     */

    public function showAction()
    {
        return new Response('Under the sea');
    }
}