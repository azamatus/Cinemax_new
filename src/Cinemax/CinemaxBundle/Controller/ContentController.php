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
use Cinemax\CinemaxBundle\Entity;

class ContentController  extends Controller{

    public function getCatalogAction()
    {
        $repository = $this ->getDoctrine()
            ->getRepository("CinemaxBundle:Discs");

        $newdiscs = $repository-> getLastUpdatedDiscs();
        return $this->render('CinemaxBundle:content:catalog.html.twig', array('discs' => $newdiscs));
    }

    public function getSliderAction()
    {

        $discs = $this -> getDoctrine()
            ->getRepository("CinemaxBundle:Discs")
            ->findAll();
        return $this->render('CinemaxBundle:content:get_slider.html.twig', array('discs' => $discs));
    }

    public function getAllCatalogAction(){

        $discs = $this -> getDoctrine()
            ->getRepository("CinemaxBundle:Discs")
            ->findAll();

        $paginator = $this -> get('knp_paginator');

        $pagination = $paginator
            ->paginate($discs, $this->get('request')->query->get('page',1),12);


        return $this -> render('CinemaxBundle:content:allCatalog.html.twig',array('pagination' => $pagination, 'title' => 'Весь каталог'));

    }

    public function sortByTypeAction($type)
    {
        $repository = $this -> getDoctrine()
               ->getRepository("CinemaxBundle:Discs");

        $sortedDiscs = $repository -> doSort($type);

        $paginator = $this -> get('knp_paginator');

        $pagination = $paginator
            ->paginate($sortedDiscs, $this->get('request')->query->get('page',1),12);
        return $this->render("CinemaxBundle:content:allCatalog.html.twig", array('pagination' => $pagination));
    }

    public function getNoveltiesAction()
    {
        $repository = $this -> getDoctrine()
            ->getRepository("CinemaxBundle:Discs");

        $novelties = $repository->getLastUpdatedDiscs();

        $paginator = $this -> get('knp_paginator');
        $pagination = $paginator
            ->paginate($novelties, $this->get('request')->query->get('page',1),12);


        return $this->render('CinemaxBundle:content:allCatalog.html.twig', array('pagination' => $pagination, 'title' => 'Новинки'));

    }

}