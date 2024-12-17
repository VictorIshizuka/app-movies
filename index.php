<?php
require 'autoload.php';

use \src\Model\{
    Filme,
    Episodio,   
    Serie,
    Genero
};
use \src\Helpers\{
    CalculadoraDeMaratonas,
    ConversorNotaEstrela
};

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme('Thor - Amor e Trovão', 2021, Genero::Acao, 180);

$filme->avalia(3);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Epsiodio piloto', 1);

echo $serie->anoLancamento . "\n";
$serie->avalia(9);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratonas();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

var_dump($serie);

echo "Para essa maratona. Você precisa de $duracao minutos\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";
