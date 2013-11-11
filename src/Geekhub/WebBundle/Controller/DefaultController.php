<?php

namespace Geekhub\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekhubWebBundle:Default:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('GeekhubWebBundle:Default:about.html.twig');
    }

}
