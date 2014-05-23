<?php

namespace Stc\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        //print_r($this->container);exit;
        if (!$this->get('security.context')->getToken()->getUser()) {
            $this->redirect('/login');
        }



        $page_data = array();

        return $this->render('StcBaseBundle:Default:index.html.twig', $page_data);
    }

    public function splashAction()
    {
        $page_data = array();

        return $this->render('StcBaseBundle:Default:splash.html.twig', $page_data);
    }
}
