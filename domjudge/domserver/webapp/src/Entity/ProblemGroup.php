<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProblemGroupRepository")
 */
class ProblemGroup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $probid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProbid(): ?int
    {
        return $this->probid;
    }

    public function setProbid(int $probid): self
    {
        $this->probid = $probid;

        return $this;
    }
}
