<?php

namespace App\Service;

use App\Entity\Commit;
use Doctrine\ORM\EntityManagerInterface;

class CommitService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function store(Array $commits): bool
    {
        if (count($commits)) {
            foreach($commits as $item) {
                $commit = new Commit();
                $commit->setSha($item['sha']);
                $commit->sethtml_url($item['html_url']);
                $commit->setauthor_name($item['commit']['author']['name']);
                $commit->setauthor_email($item['commit']['author']['email']);
                $commit->setauthor_url($item['author']['html_url']);
                $commit->setcommitter_name($item['commit']['committer']['name']);
                $commit->setcommitter_email($item['commit']['committer']['email']);
                $commit->setcommitter_url($item['committer']['html_url']);
                $commit->setStatus($item['commit']['verification']['verified']);

               $this->entityManager->persist($commit);
            }
        }

        $this->entityManager->flush();

        return true;
    }
}