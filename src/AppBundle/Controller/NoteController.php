<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoteController extends Controller {

    /**
     * @Route("/example")
     */
    public function exampleAction() {

        $msg = 'tralalaa';

        return $this->render('AppBundle::note/example.html.twig', array(
                    'msg' => $msg,
        ));
    }

}
