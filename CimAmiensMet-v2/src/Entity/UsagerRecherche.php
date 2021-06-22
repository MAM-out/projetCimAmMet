<?php

namespace App\Entity;

class UsagerRecherche
{    
    private $usager_nom_famille;
 /*   public $usager_nom_usage;
    public $usager_prenom_1;
    public $usager_prenom_2;
    public $usager_d_naissance;
    public $usager_adress_1;
    public $usager_adress_2;
    public $usager_cp;
    public $usager_ville;
*/

    public function getUsagerNomFamille(): ?string
    {
        return $this->usager_nom_famille;
    }

    public function setUsagerNomFamille(string $usager_nom_famille): self
    {
        $this->usager_nom_famille = $usager_nom_famille;

        return $this;
    }

 /*   public function getNomUsage(): ?string
    {
        return $this->usager_nom_usage;
    }

    public function setUsagerNomUsage(?string $usager_nom_usage): self
    {
        $this->usager_nom_usage = $usager_nom_usage;

        return $this;
    }

    public function getPrenom1(): ?string
    {
        return $this->usager_prenom_1;
    }

    public function setUsagerPrenom1(string $usager_prenom_1): self
    {
        $this->usager_prenom_1 = $usager_prenom_1;

        return $this;
    }

    public function getPrenom2(): ?string
    {
        return $this->usager_prenom_2;
    }

    public function setUsagerPrenom2(?string $usager_prenom_2): self
    {
        $this->usager_prenom_2 = $usager_prenom_2;

        return $this;
    }

    public function getDNaissance(): ?\DateTimeInterface
    {
        return $this->usager_d_naissance;
    }

    public function setUsagerDNaissance(?\DateTimeInterface $usager_d_naissance): self
    {
        $this->usager_d_naissance = $usager_d_naissance;

        return $this;
    }

    public function getAdress1(): ?string
    {
        return $this->usager_adress_1;
    }

    public function setUsagerAdress1(string $usager_adress_1): self
    {
        $this->usager_adress_1 = $usager_adress_1;

        return $this;
    }

    public function getAdress2(): ?string
    {
        return $this->usager_adress_2;
    }

    public function setUsagerAdress2(?string $usager_adress_2): self
    {
        $this->usager_adress_2 = $usager_adress_2;

        return $this;
    }

    public function getCp(): ?int
    {
        return $this->usager_cp;
    }

    public function setUsagerCp(?int $usager_cp): self
    {
        $this->usager_cp = $usager_cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->usager_ville;
    }

    public function setUsagerVille(string $usager_ville): self
    {
        $this->usager_ville = $usager_ville;

        return $this;
    }
*/
}