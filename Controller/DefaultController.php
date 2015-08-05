<?php

namespace JasonBradley\HashIdsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JasonBradleyHashIdsBundle:Default:index.html.twig', array('name' => $name));
    }
}
