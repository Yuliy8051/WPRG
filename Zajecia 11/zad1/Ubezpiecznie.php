<?php

class Ubezpiecznie extends AutoZDodatkami{
    private float $procentowaWartoscUbezpieczenia;
    private int $liczbaLatPosiadaniaSamochodu;

    public function ObliczCene(): float
    {
        return $this->procentowaWartoscUbezpieczenia * (parent::ObliczCene() * ((100 - $this->liczbaLatPosiadaniaSamochodu) / 100));
    }

}