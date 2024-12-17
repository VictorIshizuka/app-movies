<?php

namespace src\Exception;

use \Exception;
class NotaInvalidaExcetpion extends Exception
{
// #[\Override]
public function construct()
{
  parent::__construct('Nota precisa ser entre 0 e 10');
}
}