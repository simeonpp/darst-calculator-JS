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





<div id="confScreenCricket">
    <div style="width: 400px; margin: 10px auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Имена на играчите</h3>
            </div>
            <div class="panel-body">
                <div id="cricketPlayerFormGroup" class="form-group">
                    <!-- Here will be added inout boxes for each player name depending on number of payers -->
                </div>

                <div id="cricketStartGame" class="btn btn-success" style="margin:15px 0 0 10px">Начало на играта</div>
            </div>
        </div>
    </div>
</div>


<div id="screenCricketGame">

</div>






<div id="gameScreen">
    <div id="points">

        <div>
            <h1>Рунд: <span id="currentRound">1</span>/<span id="maxRoundsNumber">25</span></h1>
        </div>

        <div style="overflow: hidden">
            <h2 style="float: left; margin-right: 25px">Отбор 1: <span id="teamPoints-0">0</span></h2>
            <h2 style="float: left;">Отбор 2: <span id="teamPoints-1">0</span></h2>
        </div>

        <div>
        <table>
            <thead>
                <tr>
                    <th>Име</th>
                    <th>20</th>
                    <th>19</th>
                    <th>18</th>
                    <th>17</th>
                    <th>16</th>
                    <th>15</th>
                    <th>25</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="tablePlayName-0"></td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-20-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-20-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-20-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-19-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-19-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-19-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-18-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-18-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-18-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-17-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-17-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-17-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-16-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-16-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-16-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-15-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-15-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-15-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-0-25-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-25-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-0-25-3" class="pointHitBox"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="tablePlayName-1"></td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-20-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-20-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-20-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-19-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-19-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-19-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-18-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-18-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-18-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-17-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-17-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-17-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-16-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-16-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-16-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-15-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-15-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-15-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-1-25-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-25-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-1-25-3" class="pointHitBox"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="tablePlayName-2"></td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-20-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-20-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-20-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-19-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-19-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-19-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-18-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-18-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-18-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-17-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-17-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-17-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-16-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-16-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-16-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-15-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-15-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-15-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-2-25-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-25-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-2-25-3" class="pointHitBox"></div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id="tablePlayName-3"></td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-20-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-20-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-20-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-19-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-19-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-19-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-18-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-18-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-18-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-17-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-17-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-17-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-16-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-16-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-16-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-15-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-15-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-15-3" class="pointHitBox"></div>
                        </div>
                    </td>
                    <td>
                        <div class="pointHitWrap">
                            <div id="pointHitBox-player-3-25-1" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-25-2" class="pointHitBox"></div>
                            <div id="pointHitBox-player-3-25-3" class="pointHitBox"></div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    <div>
        <h1>На ред е: <span id="turnPlayName"></span>:
            <span id="hitPoints">

            </span>
        </h1>


        <div id="availableHitPointsButtons">
            <div class="row">
                <div class="availableNumber">20:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="20" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="20" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="20" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">19:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="19" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="19" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="19" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">18:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="18" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="18" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="18" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">17:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="17" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="17" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="17" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">16:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="16" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="16" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="16" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">15:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="15" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="15" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="15" data-multiplier="3">x3</button>
            </div>

            <div class="row">
                <div class="availableNumber">25:</div>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="25" data-multiplier="1">x1</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="25" data-multiplier="2">x2</button>
                <button class="availableHitPointsButton btn btn-primary btn-lg" data-points="25" data-multiplier="3">x3</button>
            </div>
        </div>

        <br>
        <button class="btn btn-warning btn-lg" id="nextPlayerTurn">Следващия играч</button>
    </div>
</div>



<script src="js/src/logic.js"></script>
<script src="js/src/501-logic.js"></script>
<script src="js/src/cricket-logic.js"></script>
</body>
</html>