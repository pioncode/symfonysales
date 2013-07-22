<?php

namespace Pion\SalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PionSalesBundle:Default:index.html.twig', array('name' => $name));
    }
}
