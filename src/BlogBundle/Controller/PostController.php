<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Post:index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/{urlName}")
     */
    public function showAction($urlName)
    {
        return $this->render('BlogBundle:Post:show.html.twig', array(
            // ...
        ));
    }

}
