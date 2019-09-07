<?php

class StilizuotasTekstas {
    public $tekstas;
    public $spalva;
    private $size;

    /**
     * StilizuotasTekstas constructor.
     * @param $tekstas: text
     * @param $spalva: color of the text
     * @param $size: size of the text
     */
    public function __construct($tekstas, $spalva='black', $size='20px')
    {
        $this->tekstas = $tekstas;
        $this->spalva = $spalva;
        if((int)$size > 20 && (int)$size < 80){
            $this->size = $size;
        } else {
            $this->size = '20px';
        }
    }


    public function __toString(){
        return "<div style='color: $this->spalva; font-size: $this->size'>$this->tekstas</div>";
    }

    /**
     * @return mixed
     */
    public function getTekstas()
    {
        return $this->tekstas;
    }

    /**
     * @param mixed $tekstas
     */
    public function setTekstas($tekstas)
    {
        $this->tekstas = $tekstas;
    }

    /**
     * @return mixed
     */
    public function getSpalva()
    {
        return $this->spalva;
    }

    /**
     * @param mixed $spalva
     */
    public function setSpalva($spalva)
    {
        $this->spalva = $spalva;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return StilizuotasTekstas object
     */
    public function setSize($size)
    {
        if((int)$size > 20 && (int)$size < 80){
            $this->size = $size;
        } else {
            $this->size = '20px';
        }
        return $this;
    }

    public function getParagraph($level=1){
        return "<h$level style='color: $this->spalva; font-size: $this->size'>$this->tekstas</h$level>";
    }

}






