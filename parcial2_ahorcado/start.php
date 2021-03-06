
<html>
    <head>
        <title>Ahorcado</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="hangman-div2">
            <div>
                Seleccione la letra:
                <div id="letters">
                    <?php
                    foreach (range('A', 'Z') as $char) {
                        echo '<span class="letter">' . $char . '</span>';
                    }
                    ?>
                    <div class="clear"></div>
                </div>
                <div id="lives-left-div">
                    Vidas restantes: <span id="lives-left"><?= $_SESSION['lives'] ?></span>
                </div>
            </div>
            <div>
                <img src="images/hangman/0.jpg" id="hangman" alt="hangman"/>
            </div>
            <div>
                <div id="guessed-word-div">
                    <?= $blankWord ?>
                </div>
                <div id="the-word-was-div" class="display-none"></div>
                <div id="play-again-div" class="display-none">
                    <a href="index.php">Jugar de nuevo.</a>
                </div>
                <div id="play-again-div" class="display-none">
                    <a href="controller.php">Dificultad.</a>
                </div>
                <div id="play-again-div" class="display-none">
                    <a href="index.php">salir</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
