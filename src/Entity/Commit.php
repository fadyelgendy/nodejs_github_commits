<?php

namespace App\Entity;

use App\Repository\CommitRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommitRepository::class)
 */
class Commit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author_email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $author_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $committer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $committer_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $committer_url;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $html_url;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $status;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSha(): ?string
    {
        return $this->sha;
    }

    public function setSha(string $sha): self
    {
        $this->sha = $sha;

        return $this;
    }

    public function getauthor_name(): ?string
    {
        return $this->author_name;
    }

    public function setauthor_name(string $author_name): self
    {
        $this->author_name = $author_name;

        return $this;
    }

    public function getauthor_email(): ?string
    {
        return $this->author_email;
    }

    public function setauthor_email(string $author_email): self
    {
        $this->author_email = $author_email;
        
        return $this;
    }

    public function getauthor_url(): ?string
    {
        return $this->author_url;
    }

    public function setauthor_url(?string $author_url): self
    {
        $this->author_url = $author_url;
        
        return $this;
    }

    public function getcommitter_name(): ?string
    {
        return $this->committer_name;
    }

    public function setcommitter_name(string $committer_name): self
    {
        $this->committer_name = $committer_name;

        return $this;
    }

    public function getcommitter_email(): ?string
    {
        return $this->committer_email;
    }

    public function setcommitter_email(string $committer_email): self
    {
        $this->committer_email = $committer_email;
        
        return $this;
    }

    public function getcommitter_url(): ?string
    {
        return $this->committer_url;
    }

    public function setcommitter_url(string $committer_url): self
    {
        $this->committer_url = $committer_url;
        
        return $this;
    }

    public function gethtml_url(): ?string
    {
        return $this->html_url;
    }

    public function sethtml_url(string $commit_url): self
    {
        $this->html_url= $commit_url;
        
        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;
        
        return $this;
    }
}
