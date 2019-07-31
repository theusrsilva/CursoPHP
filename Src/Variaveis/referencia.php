<div class="titulo">Referência</div>

<?php

$var = 'valor inicial';
echo $var;
echo '<br>';

$varValor = $var;// copiando só o valor de var
echo $varValor;
echo '<br>';
$var = 'novo valor';
echo $var;
echo '<br>';
echo $varValor;
echo '<br>';
$varValor = &$var;// pegando o endereço de memória de var
echo $varValor;
echo '<br>';
$varValor = 'peguei da memória';
echo $var;
echo '<br>';
echo $varValor;



