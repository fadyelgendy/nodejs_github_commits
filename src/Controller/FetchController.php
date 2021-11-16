<?php

namespace App\Controller;

use App\Service\CommitService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class FetchController extends AbstractController
{
    private $client;
    private $commitService;

    public function __construct(HttpClientInterface $client, CommitService $commitService)
    {
        $this->client = $client;
        $this->commitService = $commitService;
    }

    /**
     * @Route("/fetch", name="fetch")
     */
    public function fetch(): Response
    {
        $url = $this->getParameter('request.url') . "?per_page=" .
            $this->getParameter('request.per_page') . "&page=" .
            $this->getParameter('request.page');

        $response = $this->client->request("GET",$url);
        $status = $response->getStatusCode();

        if ($status == 200) {
            $content = $response->toArray();

            // Store to DB
            $stored = $this->commitService->store($content);

            if ($stored) {
                $this->addFlash('success', 'Data successfully fetched and saved to DB');
            } else {
                $this->addFlash('warning', "ERROR: can not store to DB, please try again!");
            }

        } else {
            $this->addFlash('warning', "There's something wrong!. please try again");
        }

        // Failed
        return $this->redirectToRoute("index");
    }
}
