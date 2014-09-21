<?php

namespace km\PageBundle\Controller;

use km\PageBundle\Controller\AbstractController;

/**
 * PageController
 *
 * @author Florian Weber <florian.weber.dd@icloud.com>
 */
class PageController extends AbstractController
{
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('info'));
    }

    public function infoAction()
    {
        return $this->render('kmPageBundle:Page:info.html.twig');
    }

    public function locationAction()
    {
        return $this->render('kmPageBundle:Page:location.html.twig');
    }

    public function contactAction()
    {
        return $this->render('kmPageBundle:Page:contact.html.twig');
    }

    public function imprintAction()
    {
        return $this->render('kmPageBundle:Page:imprint.html.twig');
    }
}
