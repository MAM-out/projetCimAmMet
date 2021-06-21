<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UsagersRepository;

/**
 * @ORM\Entity(repositoryClass=UsagersRepository::class)
 */
class Usagers
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
    private $usager_n_carte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usager_nom_famille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usager_nom_usage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usager_prenom_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usager_prenom_2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $usager_d_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usager_adress_1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usager_adress_2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $usager_cp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usager_ville;

    /**
     * @ORM\Column(type="datetime")
     */
    private $usager_date_crea;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $usager_date_modif;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $usager_date_suppression;

    /**
     * @ORM\Column(type="date")
     */
    private $usager_date_fin_valid;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $usager_status_valid;

    /**
     * @ORM\Column(type="integer")
     */
    private $usager_role;

    /**
     * @ORM\Column(type="integer")
     */
    private $usager_id_cimetiere;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsagerNCarte(): ?int
    {
        return $this->usager_n_carte;
    }

    public function setUsagerNCarte(int $usager_n_carte): self
    {
        $this->usager_n_carte = $usager_n_carte;

        return $this;
    }

    public function getUsagerNomFamille(): ?string
    {
        return $this->usager_nom_famille;
    }

    public function setUsagerNomFamille(string $usager_nom_famille): self
    {
        $this->usager_nom_famille = $usager_nom_famille;

        return $this;
    }

    public function getUsagerNomUsage(): ?string
    {
        return $this->usager_nom_usage;
    }

    public function setUsagerNomUsage(?string $usager_nom_usage): self
    {
        $this->usager_nom_usage = $usager_nom_usage;

        return $this;
    }

    public function getUsagerPrenom1(): ?string
    {
        return $this->usager_prenom_1;
    }

    public function setUsagerPrenom1(string $usager_prenom_1): self
    {
        $this->usager_prenom_1 = $usager_prenom_1;

        return $this;
    }

    public function getUsagerPrenom2(): ?string
    {
        return $this->usager_prenom_2;
    }

    public function setUsagerPrenom2(?string $usager_prenom_2): self
    {
        $this->usager_prenom_2 = $usager_prenom_2;

        return $this;
    }

    public function getUsagerDNaissance(): ?\DateTimeInterface
    {
        return $this->usager_d_naissance;
    }

    public function setUsagerDNaissance(?\DateTimeInterface $usager_d_naissance): self
    {
        $this->usager_d_naissance = $usager_d_naissance;

        return $this;
    }

    public function getUsagerAdress1(): ?string
    {
        return $this->usager_adress_1;
    }

    public function setUsagerAdress1(string $usager_adress_1): self
    {
        $this->usager_adress_1 = $usager_adress_1;

        return $this;
    }

    public function getUsagerAdress2(): ?string
    {
        return $this->usager_adress_2;
    }

    public function setUsagerAdress2(?string $usager_adress_2): self
    {
        $this->usager_adress_2 = $usager_adress_2;

        return $this;
    }

    public function getUsagerCp(): ?int
    {
        return $this->usager_cp;
    }

    public function setUsagerCp(?int $usager_cp): self
    {
        $this->usager_cp = $usager_cp;

        return $this;
    }

    public function getUsagerVille(): ?string
    {
        return $this->usager_ville;
    }

    public function setUsagerVille(string $usager_ville): self
    {
        $this->usager_ville = $usager_ville;

        return $this;
    }

    public function getUsagerDateCrea(): ?\DateTimeInterface
    {
        return $this->usager_date_crea;
    }

    public function setUsagerDateCrea(\DateTimeInterface $usager_date_crea): self
    {
        $this->usager_date_crea = $usager_date_crea;

        return $this;
    }

    public function getUsagerDateModif(): ?\DateTimeInterface
    {
        return $this->usager_date_modif;
    }

    public function setUsagerDateModif(?\DateTimeInterface $usager_date_modif): self
    {
        $this->usager_date_modif = $usager_date_modif;

        return $this;
    }

    public function getUsagerDateSuppression(): ?\DateTimeInterface
    {
        return $this->usager_date_suppression;
    }

    public function setUsagerDateSuppression(?\DateTimeInterface $usager_date_suppression): self
    {
        $this->usager_date_suppression = $usager_date_suppression;

        return $this;
    }

    public function getUsagerDateFinValid(): ?\DateTimeInterface
    {
        return $this->usager_date_fin_valid;
    }

    public function setUsagerDateFinValid(\DateTimeInterface $usager_date_fin_valid): self
    {
        $this->usager_date_fin_valid = $usager_date_fin_valid;

        return $this;
    }

    public function getUsagerStatusValid(): ?string
    {
        return $this->usager_status_valid;
    }

    public function setUsagerStatusValid(string $usager_status_valid): self
    {
        $this->usager_status_valid = $usager_status_valid;

        return $this;
    }

    public function getUsagerRole(): ?int
    {
        return $this->usager_role;
    }

    public function setUsagerRole(int $usager_role): self
    {
        $this->usager_role = $usager_role;

        return $this;
    }

    public function getUsagerIdCimetiere(): ?int
    {
        return $this->usager_id_cimetiere;
    }

    public function setUsagerIdCimetiere(int $usager_id_cimetiere): self
    {
        $this->usager_id_cimetiere = $usager_id_cimetiere;

        return $this;
    }
}
