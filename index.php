<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Darts calculator by Simeon Petkov</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <script src="js/libs/jquery-1.12.2.min.js"></script>
    <script src="js/libs/bootstrap.min.js"></script>
    <script src="js/libs/handlebars-v4.0.5.js"></script>
    <script src="js/src/handlebars-extensions.js"></script>
</head>
<body>

<div id="modeScreen">
    <div style="width: 400px; margin: 10px auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Select game</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-lg-12">
                        <label for="modeSelector" class="col-lg-12">Please select game:</label>
                        <select class="modeSelector" id="modeSelector">
                            <option value="0">301, 501, 701, XX1</option>
                            <option value="1">Cricket</option>
                            <option value="2">Cricket: Teamplay</option>
                        </select>

                        <label for="modeSelector" class="col-lg-12">Please select number of players:</label>
                        <select class="modeSelector" id="playersNumberSelector">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>

                    <div id="modeSelectorButton" class="btn btn-success" style="margin:15px 0 0 10px">Next step</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="configurationScreen">

</div>


<?php
    include ('templates/501/configurationScreen.php');
    include ('templates/501/gameScreen.php');

    include ('templates/cricket/configurationScreen.php');
    include ('templates/cricket/gameScreen.php');
?>


<div id="gameScreen">

</div>


<div id="screenOne">
    <div style="width: 400px; margin: 10px auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Отбор 1</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div>
                        <div>
                            <label for="teamOnePlayerOneName">Играч 1</label>
                            <input type="text" id="teamOnePlayerOneName" name="teamOnePlayerOneName">
                        </div>
                        <div>
                            <label for="teamOnePlayerTwoName">Играч 2</label>
                            <input type="text" id="teamOnePlayerTwoName" name="teamOnePlayerTwoName">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 400px; margin: 10px auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Отбор 2</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div>
                        <div>
                            <label for="teamTwoPlayerOneName">Играч 1</label>
                            <input type="text" id="teamTwoPlayerOneName" name="teamTwoPlayerOneName">
                        </div>
                        <div>
                            <label for="teamTwoPlayerTwoName">Играч 2</label>
                            <input type="text" id="teamTwoPlayerTwoName" name="teamTwoPlayerTwoName">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="width: 400px; margin: 10px auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div>
                        <label for="roundNumber">Round number:</label>
                        <input type="number" name="roundNumber" id="roundNumber" value="25">
                    </div>

                    <br>
                    <button class="btn btn-success btn-lg" id="startGameButton">Начало на играта</button>
                </div>
            </div>
        </div>
    </div>
</div>






<script src="js/src/logic.js"></script>
<script src="js/src/501-logic.js"></script>
<script src="js/src/cricket-logic.js"></script>

</body>
</html>