<div class="titulo">Tipo String</div>
<?php
    echo 'Sou uma string';
    echo '<br>';
    var_dump('Eu tambem');
    echo '<br>';
    var_dump('Eu também');
    echo '<br>';

    //concatenação

    echo "Olá "."Mundo";
    echo '<br>';
    
    $var =  "Oi ";
    $var2 = "Matheus";
    echo $var.$var2;
    echo '<br>';
    
    echo "Acaba ". 'logo';
    
    echo '<br>';


    echo "<br>", "ai meu deus ","aff";

    print("<br>Também existe print");
    print "<br>Também existe print";

    //funções

    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('minimizado');
    echo '<br>' . ucfirst('maximizado so a primeira letra' );
    echo '<br>' . ucwords('maximizado so a primeira letra de cada palavra' );
    echo '<br>' . mb_strlen('num de letras');
    echo '<br>' . mb_strlen('Eu também',"utf-8" );
    echo '<br>' . substr('Eu também',1, 5 );// (string, numero que começa a pegar a partir dele, caracteres)
    echo '<br>' . str_replace('ama','ama muito a', 'Matheus ama anne');
