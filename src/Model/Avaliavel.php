<?php

namespace src\Model;
interface Avaliavel
{
  public function avalia(float $nota):void;
  public function media():float;
}