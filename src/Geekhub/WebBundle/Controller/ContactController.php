<?php

namespace Geekhub\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Geekhub\WebBundle\Entity\Contact;

class ContactController extends Controller
{
    public function contactAction()
    {
        $contact = new Contact();
        $contact->setName('Viktor Musienko');
        $contact->setEmail('treasury23@gmail.com');

        return $this->render('GeekhubWebBundle:Contact:contact.html.twig', array('author' => $contact->getName(),
                                                                                    'email' => $contact->getEmail()));
    }
}