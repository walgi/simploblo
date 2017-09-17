<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use BlogBundle\Entity\Note;

class NoteController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository(Note::class);
        $notes = $repository->getNotesForHomepage();
                
        return [
            'notes' => $notes,
        ];
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
