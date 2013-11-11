<?php

namespace Geekhub\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Geekhub\WebBundle\Entity\CreditCalculator;

class CreditCalculatorController extends Controller
{
    public function calculatorAction()
    {
        $calculator = new CreditCalculator();
        $calculator->setSumCredit('17400');
        $calculator->setDayMonth('31');
        $calculator->setRate('11.9');
        $calculator->sumPercent();

        return $this->render('GeekhubWebBundle:Calculator:calculator.html.twig', array('calculator' => $calculator));
    }
}