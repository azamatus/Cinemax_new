<?php

namespace Cinemax\Header\HeaderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('CinemaxHeaderBundle:layout:layout.html.twig');
    }
}
