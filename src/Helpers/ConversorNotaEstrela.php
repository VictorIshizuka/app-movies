<?php
namespace src\Helpers;

use src\Model\Avaliavel;
class ConversorNotaEstrela
{
  public function converte(Avaliavel $avaliavel): float
  {
    $nota = $avaliavel->media();

    return round($nota) / 2;
  }
}
