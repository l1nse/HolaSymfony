<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/list/{page}", name="blog list" , requirements={"page" : "\d+"})
     
     */
    public function indexAction($page=1)
    {
        return $this->render('BlogBundle:Default:index.html.twig',
        		array(
        			'page' => $page

       			));
    }
}
