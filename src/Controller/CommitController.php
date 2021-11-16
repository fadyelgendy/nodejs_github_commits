<?php

namespace App\Controller;

use App\Entity\Commit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommitController extends AbstractController
{
    /**
     * @Route("/commit", name="commit")
     */
    public function index(): Response
    {
        $commits = $this->getDoctrine()
            ->getRepository(Commit::class)
            ->findAll();

        return $this->render('commit/index.html.twig', [
            'commits' => $commits,
        ]);
    }
}
