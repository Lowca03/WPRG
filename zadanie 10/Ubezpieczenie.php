<?php
include ('AutoZDodatkami.php');
class Ubezpieczenie extends AutoZDodatkami
{
    private $procentowaWartoscUbezpieczenia;
    private $lataPosiadaniaAuta;

    /**
     * @return mixed
     */
    public function getProcentowaWartoscUbezpieczenia()
    {
        return $this->procentowaWartoscUbezpieczenia;
    }

    /**
     * @param mixed $procentowaWartoscUbezpieczenia
     */
    public function setProcentowaWartoscUbezpieczenia($procentowaWartoscUbezpieczenia)
    {
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia/100;
    }

    /**
     * @return mixed
     */
    public function getLataPosiadaniaAuta()
    {
        return $this->lataPosiadaniaAuta;
    }

    /**
     * @param mixed $lataPosiadaniaAuta
     */
    public function setLataPosiadaniaAuta($lataPosiadaniaAuta)
    {
        $this->lataPosiadaniaAuta = $lataPosiadaniaAuta;
    }

    public function obliczCene()
    {
        return parent::obliczCene()*$this->procentowaWartoscUbezpieczenia*
            (100-$this->lataPosiadaniaAuta)/100;
    }

}