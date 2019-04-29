<html>
    <head>
        <title>Ahorcado</title>
  <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
         <div id="hangman-div">
            <form action="controller.php" method="POST">
               <input type="hidden" name="action" value="1" />
                <div class="center">
                    <div id="levels-div">
                        <span id="level">

                            <input type="radio" name="level" checked="checked" id="level_0" value="0">
                                <label for="level_0">Juego facil: 10 intentos.</label><br>
                            <input type="radio" name="level" id="level_1" value="1">
                                <label for="level_1">Juego medio: 5 intentos.</label><br>
                            <input type="radio" name="level" id="level_2" value="2">
                                <label for="level_2">Juego dificil: 3 intentos.</label>
                         </span>
                    </div>
                    <div>
                        <input type="submit" value="JUGAR" id="submit-button" />
                    </div>
                    <div>
                      <b><center><a href="index.php">SALIR</a></center></b><br>
                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
