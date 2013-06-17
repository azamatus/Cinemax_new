<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Aza
 * Date: 12.06.13
 * Time: 15:03
 * To change this template use File | Settings | File Templates.
 */

namespace Cinemax\CinemaxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController  extends Controller{

    public function getCatalogAction()
    {
        $discs = $this ->getDoctrine()
            ->getRepository("CinemaxBundle:Discs")
            ->findAll();

        return $this->render('CinemaxBundle:content:catalog.html.twig', array('discs' => $discs));
    }

    public function getSliderAction()
    {
        $discs = $this -> getDoctrine()
            ->getRepository("CinemaxBundle:Discs")
            ->findAll();

        return $this->render('CinemaxBundle:content:get_slider.html.twig', array('discs' => $discs));
    }
}