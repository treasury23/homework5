<?php

namespace Geekhub\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GeekhubWebBundle:Default:index.html.twig');
    }

    public function catalogAction()
    {
        return $this->render('GeekhubWebBundle:Default:catalog.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('GeekhubWebBundle:Default:about.html.twig');
    }

    public function contactAction()
    {
        return $this->render('GeekhubWebBundle:Default:contact.html.twig');
    }
}
