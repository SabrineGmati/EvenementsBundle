<?php

namespace EvenementsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EvenementsBundle:Default:index.html.twig');
    }
    public function testAction()
    {
        return $this->render('EvenementsBundle:Default:test.html.twig');
    }
    public function homeAction()
    {
        return $this->render('base.html.twig');
    }
    public function pageAction()
    {
        return $this->render('@Evenements/home.html.twig');
    }
    public function ListAction()
    {
        return $this->render('@Evenements/Default/listEvents.html.twig');
    }

}
