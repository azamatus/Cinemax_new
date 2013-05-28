<?php

namespace Cinemax\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('CinemaxMenuBundle:LeftMenu:header_menu.html.twig');
    }
}
