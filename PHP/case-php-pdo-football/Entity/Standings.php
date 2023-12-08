<?php

namespace Entity;

class Standings
{
    private int $id_standing;
    private int $idTim;
    private int $play;
    private int $win;
    private int $draw;
    private int $lost;
    // private int $gm;
    // private int $ga;
    // private int $sg;

    public function __construct(int $idTim=0, int $play=0, int $win=0, int $draw=0, $lost= 0)
    {
        $this->idTim = $idTim;
        $this->play = $play;
        $this->win = $win;
        $this->draw = $draw;
        $this->lost = $lost;
    }

    public function getIdTim(): int
    {
        return $this->idTim;
    }

    public function setIdTim(int $idTim): void
    {
        $this->idTim = $idTim;
    }

    public function getPlay(): int
    {
        return $this->play;
    }

    public function setPlay(int $play): void
    {
        $this->play = $play;
    }

    public function getWin(): int
    {
        return $this->win;
    }

    public function setWin(int $win): void
    {
        $this->win = $win;
    }

    public function getDraw(): int
    {

    }

    public function setDraw(int $draw): void
    {
        $this->draw = $draw;
    }

    public function getLost(): int
    {
        return $this->lost;
    }

    public function setLost(int $lost): void
    {
        $this->lost = $lost;       
    }


}