var cricketIFFE = (function(numberOfPlayers) {
    var numberOfRounds = 25,
        playerPoints = [],
        playerPilePoints = [],
        playerNames = [],
        currentPlayerTurn = 0,
        currentRound = 1,
        tempRoundBackupPoints = {},
        pilePointsOnOthers = true;

    function displayConfigurationScreen() {
        var $configurationScreen = $('#configurationScreen'),
            templateData = {players: []};

        for(var i = 1; i <= numberOfPlayers; i += 1) {
            templateData.players.push(i);
        }

        var source   = $("#cricket-configuration-screen").html();
        var template = Handlebars.compile(source);
        $configurationScreen.append (template(templateData));

        $configurationScreen.show();
    }

    displayConfigurationScreen();



    // Game start button
    var $body = $('body');

    $body.on('click', '#startGameButton', function() {
        var $configurationScreen = $('#configurationScreen'),
            $gameScreen = $('#gameScreen'),
            templateData = {players: []};

        numberOfRounds = $('#numberOfRounds').val() | 0;

        for(var i = 0; i < numberOfPlayers; i += 1) {
            playerPoints.push({ 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 });
            playerPilePoints.push(0);

            var currentPlayerName = $('#playerName-' + i).val();
            playerNames.push(currentPlayerName);

            templateData.players.push({
                name: playerNames[i]
            });
        }

        templateData.currentPlayerTurnName = playerNames[0];
        templateData.numberOfRounds = numberOfRounds;
        templateData.currentRound = currentRound;
        var source = $("#cricket-game-screen").html();
        var template = Handlebars.compile(source);
        $gameScreen.append (template(templateData));

        $configurationScreen.hide();
        $gameScreen.show();
        $('#tablePlayName-' + currentPlayerTurn).addClass('activePlayerTurn');
    });

    $body.on('click', '.availableHitPointsButton', function() {
        var $this = $(this),
            points = $this.attr('data-points') | 0,
            multiplier = $this.attr('data-multiplier') | 0;

        tempRoundBackupPoints = [];
        for(var i = 0; i < multiplier; i += 1) {
            handleHitPoints(points);
        }

        checkIfGameIsFinish();
    });

    function handleHitPoints(points) {
        var $hitPoints = $('#hitPoints'),
            updateTableScoreSelector;

        if (playerPoints[currentPlayerTurn][points] < 3) {
            playerPoints[currentPlayerTurn][points] += 1;
        } else {
            checkForPiling(points);
        }

        var currentHitPointsText = $hitPoints.text();
        if (currentHitPointsText == '') {
            currentHitPointsText += points;
        } else {
            currentHitPointsText += ", " + points;
        }
        $hitPoints.text(currentHitPointsText);

        updateTableScoreSelector = '#pointHitBox-player-'+ currentPlayerTurn +'-' + points + '-' + playerPoints[currentPlayerTurn][points];
        $(updateTableScoreSelector).addClass('pointHitBoxHit');
    }

    function checkForPiling(points) {
        var currentPlayerHitNumber = 0;

        for (var i = 0; i < numberOfPlayers; i += 1) {
            if (pilePointsOnOthers) {
                if (currentPlayerTurn == i) {
                    continue;
                }

                currentPlayerHitNumber = playerPoints[i][points];
                if (currentPlayerHitNumber < 3) {
                    playerPilePoints[i] += points;
                    $('#playerPiledPoints-' + i).text(playerPilePoints[i]);
                }
            } else {
                playerPilePoints[currentPlayerTurn] += points;
                $('#playerPiledPoints-' + currentPlayerTurn).text(playerPilePoints[currentPlayerTurn]);
            }
        }
    }

    $body.on('click', '#nextTurnBtn', function() {
        $('#tablePlayName-' + currentPlayerTurn).removeClass('activePlayerTurn');

        if (currentPlayerTurn == numberOfPlayers - 1) {
            if (currentRound >= numberOfRounds) {
                finishGame();
                return;
            }

            currentPlayerTurn = 0;
            currentRound += 1;
            $('#currentRound').text(currentRound);
        } else {
            currentPlayerTurn += 1;
        }

        $('#tablePlayName-' + currentPlayerTurn).addClass('activePlayerTurn');

        $('#currentPlayerTurnName').text(playerNames[currentPlayerTurn]);
        $('#hitPoints').text('');
    });

    $body.on('click', '#resetTurnBtn', function() {
        // TODO: Implement this logic
    });

    $body.on('click', '#newGameBtn', function() {
        location.reload();
    });

    function checkIfGameIsFinish() {
        var potentialWinnerIndexes = [],
            currentPlayerPoints,
            currentPlayerIsSuitableForWinner = true,
            i = 0,
            currentPlayerPiledPoints,
            currentPlayerIndex,
            j = 0,
            currentPlayerIsWinner = true;

        for(i = 0; i < numberOfPlayers; i += 1) {
            currentPlayerIsSuitableForWinner = true;
            currentPlayerPoints = playerPoints[i];

            for(var key in currentPlayerPoints) {
                if (currentPlayerPoints.hasOwnProperty(key)) {
                    if (currentPlayerPoints[key] < 3) {
                        currentPlayerIsSuitableForWinner = false;
                    }
                }
            }

            if (currentPlayerIsSuitableForWinner) {
                potentialWinnerIndexes.push(i);
            }
        }

        for(i = 0; i < potentialWinnerIndexes.length; i += 1) {
            currentPlayerIsWinner = true;
            currentPlayerIndex = potentialWinnerIndexes[i];
            currentPlayerPiledPoints = playerPilePoints[currentPlayerIndex];

            for(j = 0; j < numberOfPlayers; j += 1) {
                if (j == currentPlayerIndex) {
                    continue;
                }

                if (pilePointsOnOthers) {
                    if (playerPilePoints[j] < currentPlayerPiledPoints) {
                        currentPlayerIsWinner = false;
                        break;
                    }
                } else {
                    if (playerPilePoints[j] > currentPlayerPiledPoints) {
                        currentPlayerIsWinner = false;
                        break;
                    }
                }
            }

            if (currentPlayerIsWinner) {
                finishGame(playerNames[currentPlayerIndex]);
                break;
            }
        }

        return false;
    }

    function finishGame(winnerName) {
        if (!winnerName) {
            winnerName = getWinnerName();
        }

        $('#gameOver').show();
        $('#actionButtons').hide();

        $('#winnerPlayerName').text(winnerName);
        $('#winnerRound').text(currentRound);

        $body.animate({scrollTop: 0}, 350);
    }

    function getWinnerName() {
        var winnerName = playerNames[0],
            winnerPoints = playerPilePoints[0],
            currentPlayerPiledPoints = 0;

        for(var i = 1; i < numberOfPlayers; i += 1) {
            currentPlayerPiledPoints = playerPilePoints[i];

            if (pilePointsOnOthers) {
                if (currentPlayerPiledPoints < winnerPoints) {
                    winnerPoints = currentPlayerPiledPoints;
                    winnerName = playerNames[i];
                }
            } else {
                if (currentPlayerPiledPoints > winnerPoints) {
                    winnerPoints = currentPlayerPiledPoints;
                    winnerName = playerNames[i];
                }
            }
        }

        return winnerName;
    }
});