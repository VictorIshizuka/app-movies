<?php

namespace src\Helpers;

use src\Model\Titulo;
class CalculadoraDeMaratonas
{
  private int $duracaoMaratona = 0;

  public function inclui(Titulo $titulo): void
  {
    $this->duracaoMaratona += $titulo->duracaoEmMinutos();
  }

  public function duracao(): int
  {
    return $this->duracaoMaratona;
  }
}
