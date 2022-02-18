<?php

class Vehicule
{
    private int $nbRoues;
    private int $nbChevaux;
    private string $carburant;
    private string $couleur;
    private Roue $roue;

    public function __construct(int $nbRoues, int $nbChevaux, string $carburant, string $couleur, Roue $roue)
    {
        $this->carburant = $carburant;
        $this->couleur = $couleur;
        $this->nbChevaux = $nbChevaux;
        $this->nbRoues = $nbRoues;
        $this->roue = $roue;
    }

    /**
     * @return Roue
     */
    public function getRoue(): Roue
    {
        return $this->roue;
    }

    /**
     * @param Roue $roue
     */
    public function setRoue(Roue $roue): void
    {
        $this->roue = $roue;
    }

    /**
     * @return int
     */
    public function getNbRoues(): int
    {
        return $this->nbRoues;
    }

    /**
     * @param int $nbRoues
     */
    public function setNbRoues(int $nbRoues): void
    {
        $this->nbRoues = $nbRoues;
    }

    /**
     * @return int
     */
    public function getNbChevaux(): int
    {
        return $this->nbChevaux;
    }

    /**
     * @param int $nbChevaux
     */
    public function setNbChevaux(int $nbChevaux): void
    {
        $this->nbChevaux = $nbChevaux;
    }

    /**
     * @return string
     */
    public function getCarburant(): string
    {
        return $this->carburant;
    }

    /**
     * @param string $carburant
     */
    public function setCarburant(string $carburant): void
    {
        $this->carburant = $carburant;
    }

    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     */
    public function setCouleur(string $couleur): void
    {
        $this->couleur = $couleur;
    }
}