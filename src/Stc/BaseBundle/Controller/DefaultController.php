<?php

namespace Stc\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //print_r($this->container);exit;
        $page_data = array();

        if (null === ($this->get('security.context')->getToken())) {
            $this->get('security.context')->setToken(null);
            $this->get('request')->getSession()->invalidate();
        }

        return $this->render('StcBaseBundle:Default:index.html.twig', $page_data);
    }

    public function splashAction()
    {
        $page_data = array();

        return $this->render('StcBaseBundle:Default:splash.html.twig', $page_data);
    }

    public function profileAction()
    {
        $page_data = array();

        return $this->render('StcBaseBundle:Default:profile.html.twig', $page_data);
    }
}
