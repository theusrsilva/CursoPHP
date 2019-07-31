<div class="titulo">Desafio Equação</div>

<?php 
    $cDez=10**3;
    $first = ((6*(3+2))**2)/(3*2);
    $second = (((1-5)*(2-7))/2)**2;

    $resultado = (($first-$second)**3)/$cDez;
    echo $resultado;
    echo '<br>';
    echo $first;
    echo '<br>';
    echo $second;