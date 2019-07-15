<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Style/index.css">
    <link rel="stylesheet" href="Style/exercices.css">
    <title>Exercícios</title>
</head>

<body class="exercicio"> 
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegation">
            <a href=<?= "{$_GET['dir']}/{$_GET['file']}.php"?> >Sem formatação</a>
            <a href="index.php">Voltar</a>

    </nav>
    <main class="principal">
        
        <div class="assets">
            <?php
                include(__DIR__ . "/{$_GET['src']}/{$_GET['dir']}/{$_GET['file']}.php");
                
            ?>
            
        </div>
    </main>
    <footer class="footer">
        <a class="copyright">Copyright © <?php echo date('Y'); ?> Criado por Matheus Rocha, Todos os direitos reservados.</a>
    </footer>
</body>

</html>