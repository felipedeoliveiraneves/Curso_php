<?php

$cincoDias = strtotime('5 days');
echo $cincoDias . "<br>";

$dezDias = strtotime('10 days');
echo $dezDias . "<br>";

$dataAtuaismais5 = date('d/m/y', $cincoDias);
echo $dataAtuaismais5 . "<br>";

$dataAtuaismais10 = date('d/m/y', $dezDias);
echo $dataAtuaismais10 . "<br>";

$doisMeses = strtotime('2 months');
echo $doisMeses . "<br>";

$dataAtualmaisdoismeses = date('d/m/Y', $doisMeses);
echo $dataAtualmaisdoismeses . "<br>";

$dozeAnos = strtotime('12 years');
echo $dozeAnos . "<br>";

echo date('d/F/Y', $dozeAnos);

