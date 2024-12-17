<?php

namespace src\Helpers;

use ArgumentCountError;
use DivisionByZeroError;
use src\Model\Avaliavel;

class ConversorNotaEstrela
{
  public function converte(Avaliavel $avaliavel): float
  {
    try {

      $nota = $avaliavel->media();

      return round($nota) / 2;
    } catch (DivisionByZeroError ) {
      return 0;
    }
    // catch( ArgumentCountError $error){
    //   echo $error->getMessage()."\n";
    //   return 0;
      
    // }
  }
}
