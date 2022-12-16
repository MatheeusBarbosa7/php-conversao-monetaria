<?php

class Conversao
{

    public function brlParaDolar($valor,$taxa)
    {
        echo "Valor em Reais é " . $valor . " Valor de Dolar é ". $valor * $taxa. "<br>";
    }
    public function brlParaEuro($valor,$taxa)
    {
        echo "Valor em Reais é " . $valor . " Valor de euro é ". $valor * $taxa. "<br>";
    }
    public function brlParaLibra($valor,$taxa)
    {
        echo "Valor em Reais é " . $valor . " valor de libra é ". $valor * $taxa. "<br>";
    }
    public function brlParaYen($valor,$taxa)
    {
        echo "Valor em Reais é " . $valor . " Valor de Yen é " . $valor * $taxa . "<br>";

    }
}

$conversao= new Conversao();
$conversao-> brlParaDolar(5700,5);
$conversao-> brlParaEuro(9400,4);
$conversao-> brlParaLibra(10300,3);
$conversao-> brlParaYen(17890,7);

