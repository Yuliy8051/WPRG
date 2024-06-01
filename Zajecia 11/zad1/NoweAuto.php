<?php
class NoweAuto{
    protected string $modelAuta;
    protected int|float $cena_w_Euro;
    protected float $aktualnyKurs;
    public function ObliczCene(): float{
        return $this->cena_w_Euro * $this->aktualnyKurs;
    }
}