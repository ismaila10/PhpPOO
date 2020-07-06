<?php

declare(strict_types=1);

class Medecin
{
    // Definition des attributs
    private $idMedecin;
    private $nomMedecin;
    private $prenomMedecin;
    private $adresseMedecin;
    private $emailMedecin;
    private $telMedecin;

    // Definition des constructeurs
    public function __construct()
    {
        $num = func_num_args();
        $args = func_get_args();
        switch ($num) {
            case 0:
                $this->constructeurSansArgument();
                break;
            case 6:
                $this->constructeurAvecArgument($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
                break;
        }
    }

    private function constructeurSansArgument()
    {
    }

    private function constructeurAvecArgument(int $idMedecin, string $nomMedecin, string $prenomMedecin, string $adresseMedecin, string $emailMedecin, string $telMedecin)
    {
        $this->idMedecin = $idMedecin;
        $this->nomMedecin = $nomMedecin;
        $this->prenomMedecin = $prenomMedecin;
        $this->adresseMedecin = $adresseMedecin;
        $this->emailMedecin = $emailMedecin;
        $this->telMedecin = $telMedecin;
    }

    function getIdMedecin()
    {
        return $this->idMedecin;
    }

    function setIdMedecin($idMedecin)
    {
        $this->idMedecin = $idMedecin;
    }


    /**
     * Get the value of nomMedecin
     */
    public function getNomMedecin()
    {
        return $this->nomMedecin;
    }

    /**
     * Set the value of nomMedecin
     *
     * @return  self
     */
    public function setNomMedecin($nomMedecin)
    {
        $this->nomMedecin = $nomMedecin;

        return $this;
    }

    /**
     * Get the value of prenomMedecin
     */
    public function getPrenomMedecin()
    {
        return $this->prenomMedecin;
    }

    /**
     * Set the value of prenomMedecin
     *
     * @return  self
     */
    public function setPrenomMedecin($prenomMedecin)
    {
        $this->prenomMedecin = $prenomMedecin;

        return $this;
    }

    /**
     * Get the value of adresseMedecin
     */
    public function getAdresseMedecin()
    {
        return $this->adresseMedecin;
    }

    /**
     * Set the value of adresseMedecin
     *
     * @return  self
     */
    public function setAdresseMedecin($adresseMedecin)
    {
        $this->adresseMedecin = $adresseMedecin;

        return $this;
    }

    /**
     * Get the value of emailMedecin
     */
    public function getEmailMedecin()
    {
        return $this->emailMedecin;
    }

    /**
     * Set the value of emailMedecin
     *
     * @return  self
     */
    public function setEmailMedecin($emailMedecin)
    {
        $this->emailMedecin = $emailMedecin;

        return $this;
    }

    /**
     * Get the value of telMedecin
     */
    public function getTelMedecin()
    {
        return $this->telMedecin;
    }

    /**
     * Set the value of telMedecin
     *
     * @return  self
     */
    public function setTelMedecin($telMedecin)
    {
        $this->telMedecin = $telMedecin;

        return $this;
    }
}
