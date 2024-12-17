<?php

namespace src\Traits;

use src\Exception\NotaInvalidaExcetpion;
trait ComAvaliacao
{
  private array $notas = [];
  public function avalia(float $nota): void
  {
    if($nota < 0 || $nota > 10){
      throw new NotaInvalidaExcetpion();
    }
    $this->notas[] = $nota;
  }

  public function media(): float
  {
    $somaNotas = array_sum($this->notas);
    $quantidadeNotas = count($this->notas);

    return $somaNotas / $quantidadeNotas;
  }
}
