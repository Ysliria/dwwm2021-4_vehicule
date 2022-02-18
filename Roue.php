<?php

class Roue
{
    private int $taille;
    private string $marque;

    /**
     * @param int    $taille
     * @param string $marque
     */
    public function __construct(int $taille, string $marque)
    {
        $this->taille = $taille;
        $this->marque = $marque;
    }

    /**
     * @return int
     */
    public function getTaille(): int
    {
        return $this->taille;
    }

    /**
     * @param int $taille
     */
    public function setTaille(int $taille): void
    {
        $this->taille = $taille;
    }

    /**
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque(string $marque): void
    {
        $this->marque = $marque;
    }


}