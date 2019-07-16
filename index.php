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