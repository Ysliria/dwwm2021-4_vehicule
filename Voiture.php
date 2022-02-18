<?php

require_once 'Vehicule.php';

class Voiture extends Vehicule
{
    private bool $toitOuvrant;

    public function __construct(int $nbRoues, int $nbChevaux, string $carburant, string $couleur, bool $toitOuvrant, Roue $roue)
    {
        $this->toitOuvrant = $toitOuvrant;
        parent::__construct($nbRoues, $nbChevaux, $carburant, $couleur, $roue);
    }

    /**
     * @return bool
     */
    public function isToitOuvrant(): bool
    {
        return $this->toitOuvrant;
    }

    /**
     * @param bool $toitOuvrant
     */
    public function setToitOuvrant(bool $toitOuvrant): void
    {
        $this->toitOuvrant = $toitOuvrant;
    }
}