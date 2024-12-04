<?php

require __DIR__ . "/src/Model/Titulo.php";
require __DIR__ . "/src/Model/Serie.php";
require __DIR__ . "/src/Model/Filme.php";
require __DIR__ . "/src/Model/Genero.php";
require __DIR__ . "/src/Helpers/CalculadoraDeMaratonas.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme('Thor - Amor e Trovão', 2021, Genero::Acao, 180);

$filme->avalia(3);
$filme->avalia(5);

var_dump($filme);

echo $filme->media()."\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10,20, 30);

echo $serie->anoLancamento."\n";
$serie->avalia(9);
echo $serie->media()."\n";

$calculadora = new CalculadoraDeMaratonas();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

var_dump($serie);

echo "Para essa maratona. Você precisa de $duracao minutos";
