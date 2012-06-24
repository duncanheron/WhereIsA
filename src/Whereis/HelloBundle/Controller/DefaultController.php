<?php

namespace Whereis\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('WhereisHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
