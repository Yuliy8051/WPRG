<?php

class AutoZDodatkami extends NoweAuto{
protected int|float $alarm;
protected int|float $radio;
protected int|float $klimatyzacja;

    public function ObliczCene(): float
    {
        return parent::ObliczCene() + $this->alarm + $this->radio + $this->klimatyzacja;
    }

}