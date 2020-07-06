<?php

class RendezVous
{
    //Definition des attributs
    private $id;
    private $date;
    private $comment;
    private $medecin;

    // Definition des constructeurs
    public function __construct()
    {
        $num = func_num_args();
        $args = func_get_args();
        switch ($num) {
            case 0:
                $this->constructeurSansArgument();
                break;
            case 4:
                $this->constructeurAvecArgument($args[0], $args[1], $args[2], $args[3]);
                break;
        }
    }

    private function constructeurSansArgument()
    {
    }

    private function constructeurAvecArgument($id, $date, $comment, $medecin)
    {
        $this->id = $id;
        $this->date = $date;
        $this->comment = $comment;
        $this->medecin = $medecin;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set the value of comment
     *
     * @return  self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get the value of medecin
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set the value of medecin
     *
     * @return  self
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }
}
