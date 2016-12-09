<?php

namespace informatica\InformaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('informaticaInformaticaBundle:Default:index.html.twig');
    }
}
