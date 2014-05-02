<?php

namespace Stc\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //print_r($this->container);exit;
        $page_data = array();

        return $this->render('StcBaseBundle:Default:index.html.twig', $page_data);
    }
}
