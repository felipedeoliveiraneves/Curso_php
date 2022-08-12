<?php

$tesxtoHtml = "<p>Testando paragrafo.</p><div>Uma div</div><p>Outro paragrafo</p>";

echo $tesxtoHtml;

$salvarTextoBanco = strip_tags($tesxtoHtml);

echo $salvarTextoBanco;
