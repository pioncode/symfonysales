<?php

namespace Pion\SalesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pion\SalesBundle\Form\Type\TraType;
use Pion\SalesBundle\Entity\FormTransaction;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PionSalesBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newAction()
    {
        $task= new FormTransaction();
        $form= $this->createForm(new TraType(),$task);
        return $this->render('PionSalesBundle:Default:newTraTemplate.html.twig',array('form' =>$form->createView()));
    }
 }
?>