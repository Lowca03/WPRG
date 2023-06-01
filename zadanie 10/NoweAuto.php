<?php

class NoweAuto
{
    protected $model;
    protected $cenaEUR;
    protected $EurToPln = 4.5;

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @param mixed $cenaEUR
     */
    public function setCenaEUR($cenaEUR)
    {
        $this->cenaEUR = $cenaEUR;
    }

//    /**
//     * @param $model
//     * @param $cenaEUR
//     */
//    public function __construct($model, $cenaEUR)
//    {
//        $this->model = $model;
//        $this->cenaEUR = $cenaEUR;
//    }



    public function obliczCene(){
    return $this->cenaEUR*$this->EurToPln;
}

}