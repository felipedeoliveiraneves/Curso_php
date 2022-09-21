<?php

$dataNacimento = mktime(02, 12, 33, 02, 05, 1993);
echo $dataNacimento . "<br>";

$dataNacimentoFormatada = date('d/m/y', $dataNacimento);
echo $dataNacimentoFormatada . "<br>";

$dataExpecifica = mktime(10, 30, 11, 04, 28, 2041);
echo $dataExpecifica . "<br>";

$dataFuturaFormatada = date('m/d/y', $dataExpecifica);
echo $dataFuturaFormatada . "<br>";


