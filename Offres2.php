
<?php
class Offres
{
    /**
     * Class offres sert à générer des offres, utilisés pour entrer des données dans la base de donné
     */
    private $nomA;
    private $nomE;
    private $lieux;
    private $debut;
    private $fin;
    private $salaire;
    private $descri;

    /**
     * Utilisateur constructor.
     * @param $nomA
     * @param $nomE
     * @param $lieux
     * @param $debut
     * @param $fin
     * @param $salaire
     * @param $descri
     */
    public function __construct($nomA, $nomE, $lieux, $debut, $fin, $salaire, $descri)
    {
        $this->nomA = $nomA;
        $this->nomE = $nomE;
        $this->lieux = $lieux;
        $this->debut = $debut;
        $this->fin = $fin;
        $this->salaire = $salaire;
        $this->descri = $descri;
    }

    /**
     * @return mixed
     */
    public function getNomA()
    {
        return $this->nomA;
    }

    /**
     * @param mixed $nomA
     */
    public function setNomA($nomA)
    {
        $this->nomA = $nomA;
    }

    /**
     * @return mixed
     */
    public function getnomE()
    {
        return $this->nomE;
    }

    /**
     * @param mixed $nomE
     */
    public function setnomE($nomE)
    {
        $this->nomE = $nomE;
    }

    /**
     * @return mixed
     */
    public function getlieux()
    {
        return $this->lieux;
    }

    /**
     * @param mixed $lieux
     */
    public function setlieux($lieux)
    {
        $this->lieux = $lieux;
    }

    /**
     * @return mixed
     */
    public function getdebut()
    {
        return $this->debut;
    }

    /**
     * @param mixed $debut
     */
    public function setdebut($debut)
    {
        $this->debut = $debut;
    }

    /**
     * @return mixed
     */
    public function getfin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setfin($fin)
    {
        $this->fin = $fin;
    }

    /**
     * @return mixed
     */
    public function getsalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setsalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getdescri()
    {
        return $this->descri;
    }

    /**
     * @param mixed $descri
     */
    public function setdescri($descri)
    {
        $this->descri = $descri;
    }


}
?>