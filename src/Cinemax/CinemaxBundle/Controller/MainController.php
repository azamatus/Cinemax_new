<?php

namespace Cinemax\CinemaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('CinemaxBundle:content:content.html.twig');
    }
}
