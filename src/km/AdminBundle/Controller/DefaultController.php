<?php

namespace km\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('kmAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
