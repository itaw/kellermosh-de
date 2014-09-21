<?php

namespace km\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

abstract class AbstractController extends Controller
{
    public function trans($message, $parameters = array(), $domain = null, $locale = null)
    {
        return $this->get('translator')->trans($message, $parameters, $domain, $locale);
    }
}
