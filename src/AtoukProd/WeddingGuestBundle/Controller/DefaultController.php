<?php

namespace AtoukProd\WeddingGuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtoukProdWeddingGuestBundle:Default:index.html.twig');
    }
}
