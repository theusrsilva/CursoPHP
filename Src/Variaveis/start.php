<div class="titulo">Variáveis</div>
<?php

    $A = 13;
    echo $A, '<br>';
    var_dump($A);
    echo '<br>';
    $a = 3;
    $b = 15;
    $soma = $a+$b;
    echo $soma;
    echo '<br>';
    echo isset($soma);//verifica se ela está settada
    echo '<br>';
    $variavel = 'Sou uma string!';
    echo $variavel;
    echo '<br>';
    var_dump($variavel);
    
    //Regras de nomeclatura!
    
    echo '<br>';
    $var = 'Válido';
    $var2 = 'Válido';
    $VAR = 'Válido';
    $_var_4 ='Válido'; 
    //$6var = 'Inválido';
    //$%var7 = 'inválido';
    //$var8% = 'inválido';
    var_dump($_SERVER['HTTP_HOST']);

