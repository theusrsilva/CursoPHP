<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/index.css">
    <title>Curso PHP</title>
</head>

<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>índice de exercícios</h2>
    </header>
    <main class="principal">
        <div class="assets">
            <nav class="modulos">
                <div class="modulo">
                    <h3>Módulo - 01</h3>
                    <ul>
                        <li><a href="exercices.php?src=Src&dir=Basico&file=ola">Ola PHP</a></li>
                        <li><a href="exercices.php?src=Src&dir=Basico&file=html">Integração HTML</a></li>
                        <li><a href="exercices.php?src=Src&dir=Basico&file=css">Integração CSS</a></li>
                        <li><a href="exercices.php?src=Src&dir=Basico&file=comentarios">Comentários em PHP</a></li>
                        <li><a href="exercices.php?src=Src&dir=Basico&file=desafio">Desafio 1</a></li>
                        </ul>
                </div>
                <div class="modulo">
                    <h3>Módulo - 02</h3>
                    <ul>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=int">Inteiros</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=float">Float</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=aritmeticos">Operações aritmeticas</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=desafio_precedencia">Desafio precedencia</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=string">Tipo string</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=desafio_string">Desafio string</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=boolean">Tipo Boolean</a></li>
                        <li><a href="exercices.php?src=Src&dir=Tipos&file=conversao">Conversões</a></li>

                    </ul>
                </div>
                <div class="modulo">
                    <h3>Módulo - 03</h3>
                    <ul>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=start">Start</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=desafio_equacao">Desafio Equação</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=interpolacao">Interpolações</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=referencia">Referências</a></li>
                        <li><a href="exercices.php?src=Src&dir=Variaveis&file=constantes">Constantes</a></li>
                        
                    </ul>
                </div>
                <div class="modulo">
                    <h3>Módulo - 04</h3>
                    <ul>
                        <li><a href="exercices.php?src=Src&dir=Controles&file=if_else">If & Else</a></li>
                        <li><a href="exercices.php?src=Src&dir=Controles&file=operadores_relacionais">Operadores Relacionais</a></li>
                        <li><a href="exercices.php?src=Src&dir=Controles&file=post">$_Post</a></li>
                        <li><a href="exercices.php?src=Src&dir=Controles&file=ternario">Operadores Ternários</a></li>
                        <li><a href="exercices.php?src=Src&dir=Controles&file=switch">Switch</a></li>        
                    </ul>
                </div>
                <div class="modulo">
                    <h3>Módulo - 05</h3>
                    <ul>
                        <li><a href="exercices.php?src=Src&dir=Array&file=array_basico">Array Básico</a></li>
                       
                        
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">
        <a class="copyright">Copyright © <?php echo date('Y'); ?> Criado por Matheus Rocha, Todos os direitos reservados.</a>
    </footer>
</body>

</html>