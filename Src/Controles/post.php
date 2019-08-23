<div class="titulo">$_Post</div>
<?php
    $charmander = 'charmander';
    $bulbassauro = 'bulbassauro';
    $squirtle = 'squirtle';
    ?>
    <form action="#" method="post">
            <div class="poke">
                <div>
                    <label for="t1">Escolha seu primeiro pokémon:</label>
                </div>
                <div>
                    <select name="t1">
                        <option value=<?=$bulbassauro?>><?= $bulbassauro?></option>
                        <option value=<?= $charmander?>><?= $charmander?></option>
                        <option value=<?= $squirtle?>><?= $squirtle?></option>
                    </select>
                </div>        
                <div>
                    <button>Escolho Você!</button>
                </div>        
            </div>
    </form>

    <style>
        button,select,label{
            margin: 20px;
            font-size: 3rem;
        }
        button{
            border-radius:10px;
        }
        .poke{
            display:flex;
            justify-content:space-around;
            flex-direction: column;
            align-items: center;
        }
    </style>
    <div class="poke">
        <?php
            switch($_POST['t1']){
                case 'bulbassauro':
                    echo 'Fofo mas escolhe outro!';
                    break;
                case 'squirtle':
                    echo 'Seu Lixo';
                    break;
                case 'charmander':
                    echo 's2';
                    break;
            }
            ?>
    </div>
