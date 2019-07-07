<?php
/**
 * Created by PhpStorm.
 * User: margaretasandor
 * Date: 07/07/2019
 * Time: 13:38
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('OMG!! New page is here! WooHooo');
    }

    /**
     * @Route("/public/{slug}")
     */
    public function publicpage($slug) {

        return $this->render('public/publicpage.html.twig', [
            'title' => $slug
        ]);

    }
}