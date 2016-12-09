<?php

namespace mnz\InfomrmaticaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('mnzInfomrmaticaBundle:Default:index.html.twig');
    }
}
