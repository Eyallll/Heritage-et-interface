<?php

class SportBallon extends Sport
{
    private $largeur;
    private $longueur;

/**
* @param $largeur
* @param $longueur
*/
    public function __construct(string $nomSport, int $nbJoueurs, int $largeur, int $longueur)
    {
        parent::__construct($nomSport,$nbJoueurs);
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }

/**
* @return int
*/
    public function getLargeur(): int
    {
        return $this->largeur;
    }

    /**
     * @return int
     */
    public function getLongueur(): int
    {
        return $this->longueur;
    }
    public  function getDescription(): string
    {
        return '</br>Description " Nom du sport : ' .$this->nomSport
            . "<br> Nb de joueurs : " .$this->nomSport.
            ' personnes<br> Longueur du terrain : ' .$this->longueur. '<br> Largueur du terrain : '.$this->largeur.'m" : <br>';
    }
}