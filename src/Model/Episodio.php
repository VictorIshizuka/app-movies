<?php

namespace src\Model;

use src\Traits\ComAvaliacao;
class Episodio implements Avaliavel
{
  use ComAvaliacao;
  public function __construct(
    public readonly Serie $serie,
    public readonly string $nome,
    public readonly int $nunmero,

  ) {
    
  }

  
}
