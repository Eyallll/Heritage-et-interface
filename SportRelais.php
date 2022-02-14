<?php

class SportRelais extends Sport
{
    private $distance;

    /**
     * @param $distance
     */
    public function __construct(string $nomSport, int $nbJoeurs, int $distance)
    {
        parent::__construct($nomSport, $nbJoeurs);
        $this->distance = $distance;
    }

    /**
     * @return mixed
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getDescription(): string

    {
        return 'Description: "Nom du sport : ' . $this->nomSport . ' Nb de joueurs: ' . $this->nbJoeurs .
            ' personnes Distance:' .$this->distance. 'm" <br>';
    }
}


