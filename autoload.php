<?php
spl_autoload_register(function (string $className){
  $caminho = str_replace('Src', 'src', $className ).".php";

  $caminhoCompleto = __DIR__.DIRECTORY_SEPARATOR. $caminho;
  $camimho = str_replace('\\', DIRECTORY_SEPARATOR, $className);
  require_once __DIR__.DIRECTORY_SEPARATOR. $caminho;
  if(file_exists($caminhoCompleto)){
    require_once $caminhoCompleto;
  }
//      var_dump($caminho );
//  exit();
});