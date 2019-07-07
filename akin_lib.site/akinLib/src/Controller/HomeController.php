<?php
/**
 * Created by PhpStorm.
 * User: margaretasandor
 * Date: 07/07/2019
 * Time: 13:38
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    /**
     * @Route("/")
     */
    public function homepage() {
        return new Response('OMG!! New page is here! WooHooo');
    }
}