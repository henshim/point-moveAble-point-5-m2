<?php


class Point
{
    protected $x;
    protected $y;

    public function __construct($x,$y){
        $this->x=$x;
        $this->y=$y;
    }

    /**
     * @param float $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    public function setXY($x,$y){
        $this->x=$x;
        $this->y=$y;
    }

    public function getXY(){
        return [$this->x,$this->y];
    }

    public function toString(){
        return $this->x.','. $this->y;
    }
}

