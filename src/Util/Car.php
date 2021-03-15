<?php


namespace App\Util;


class Car
{
    private $makeModel = "";
    private $fuel = "";

    public function getMakeModel()
    {
        return $this->makeModel;
    }

    public function setMakeModel($makeModel): void
    {
        $this->makeModel = $makeModel;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFuel($fuel): void
    {
        $this->fuel = $fuel;
    }

    public function isVrtExempt(){
        return ($this->fuel = "electric");
    }

    public function isVrtExemptString(){
        if($this->fuel = "electric")
            return "VRT to be paid";
        else
            return "(exempt from vrt)";
    }
}