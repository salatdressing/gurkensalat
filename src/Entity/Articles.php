<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $articleTitle;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $articleContent;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $isFrom;

    public function getId()
    {
        return $this->id;
    }

    public function getArticleTitle(): ?string
    {
        return $this->articleTitle;
    }

    public function setArticleTitle(?string $articleTitle): self
    {
        $this->articleTitle = $articleTitle;

        return $this;
    }

    public function getArticleContent(): ?string
    {
        return $this->articleContent;
    }

    public function setArticleContent(?string $articleContent): self
    {
        $this->articleContent = $articleContent;

        return $this;
    }

    public function getIsFrom(): ?string
    {
        return $this->isFrom;
    }

    public function setIsFrom(string $isFrom): self
    {
        $this->isFrom = $isFrom;

        return $this;
    }
}
