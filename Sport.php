<?php

class Sport implements iSport
{
    protected $nomSport;
    protected $nbJoeurs;

    /**
     * @param $nomSport
     * @param $nbJoeurs
     */
    public function __construct(string $nomSport,int $nbJoeurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoeurs = $nbJoeurs;
    }

    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    /**
     * @return int
     */
    public function getNbJoeurs(): int
    {
        return $this->nbJoeurs;
    }

    public function getDescription(): string
    {
        return 'Description : "Nom du sport:' . $this->nomSport. ' Nb de joueurs:' . $this->nbJoeurs . ' personnes "<br>';
    }


}