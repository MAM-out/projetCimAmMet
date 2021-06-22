<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GestionCimetieresRepository;

/**
 * @ORM\Entity(repositoryClass=GestionCimetieresRepository::class)
 */
class GestionCimetieres
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $c_num;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $c_libelle;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $c_valide;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $c_datcre;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $c_datmod;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $c_datsup;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $c_secteur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCNum(): ?int
    {
        return $this->c_num;
    }

    public function setCNum(int $c_num): self
    {
        $this->c_num = $c_num;

        return $this;
    }

    public function getCLibelle(): ?string
    {
        return $this->c_libelle;
    }

    public function setCLibelle(string $c_libelle): self
    {
        $this->c_libelle = $c_libelle;

        return $this;
    }

    public function getCValide(): ?string
    {
        return $this->c_valide;
    }

    public function setCValide(?string $c_valide): self
    {
        $this->c_valide = $c_valide;

        return $this;
    }

    public function getCDatcre(): ?\DateTimeInterface
    {
        return $this->c_datcre;
    }

    public function setCDatcre(?\DateTimeInterface $c_datcre): self
    {
        $this->c_datcre = $c_datcre;

        return $this;
    }

    public function getCDatmod(): ?\DateTimeInterface
    {
        return $this->c_datmod;
    }

    public function setCDatmod(?\DateTimeInterface $c_datmod): self
    {
        $this->c_datmod = $c_datmod;

        return $this;
    }

    public function getCDatsup(): ?\DateTimeInterface
    {
        return $this->c_datsup;
    }

    public function setCDatsup(?\DateTimeInterface $c_datsup): self
    {
        $this->c_datsup = $c_datsup;

        return $this;
    }

    public function getCSecteur(): ?int
    {
        return $this->c_secteur;
    }

    public function setCSecteur(?int $c_secteur): self
    {
        $this->c_secteur = $c_secteur;

        return $this;
    }
}
