<?php
include('NoweAuto.php');
class AutoZDodatkami extends NoweAuto
{
    protected $alarm;
    protected $radio;
    protected $klimatyzacja;

    /**
     * @return mixed
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * @param mixed $alarm
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @return mixed
     */
    public function getKlimatyzacja()
    {
        return $this->klimatyzacja;
    }

    /**
     * @param mixed $klimatyzacja
     */
    public function setKlimatyzacja($klimatyzacja)
    {
        $this->klimatyzacja = $klimatyzacja;
    }

    public function obliczCene()
    {
        return parent::obliczCene()+$this->alarm+$this->radio+$this->klimatyzacja;
    }


}