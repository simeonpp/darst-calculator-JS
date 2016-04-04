var fiveZeroOneIFFE = (function(numberOfPlayers) {
    var startPoints = 501,
        numberOfRounds = 25,
        playerPoints = [],
        playerNames = [],
        currentPlayerTurn = 0,
        currentRound = 1;

    function displayConfigurationScreen() {
        var $configurationScreen = $('#configurationScreen'),
            templateData = {players: []};

        for(var i = 1; i <= numberOfPlayers; i += 1) {
            templateData.players.push(i);
        }

        var source   = $("#501-configuration-screen").html();
        var template = Handlebars.compile(source);
        $configurationScreen.append (template(templateData));

        $configurationScreen.show();
    }

    // Change points handler
    var $body = $('body');

    $body.on('change', '#startPoints', function() {
        var $this = $(this),
            value = $this.val();

        $('#configurationTitle').text(value + ' Configuration');
        startPoints = value;
    });

    displayConfigurationScreen();




    // Game start button
    $body.on('click', '#startGameButton', function() {
        var $configurationScreen = $('#configurationScreen'),
            $gameScreen = $('#gameScreen'),
            templateData = {players: []};

        startPoints = $('#startPoints').val() | 0;
        numberOfRounds = $('#numberOfRounds').val() | 0;

        var i = 0;
        for(i = 0; i < numberOfPlayers; i += 1) {
            playerPoints.push(startPoints);

            var currentPlayerName = $('#playerName-' + i).val();
            playerNames.push(currentPlayerName);

            templateData.players.push({
                name: playerNames[i],
                points: playerPoints[i]
            });
        }

        templateData.currentPlayerTurnName = playerNames[0];
        templateData.numberOfRounds = numberOfRounds;
        templateData.currentRound = currentRound;
        var source = $("#501-game-screen").html();
        var template = Handlebars.compile(source);
        $gameScreen.append (template(templateData));

        $configurationScreen.hide();
        $gameScreen.show();

        $('ul#fiveZeroOneScoreUl li#playerLi-' + currentPlayerTurn).addClass('active');
    });

    $body.on('click', '#nextTurnBtn', function() {
        var hitPoints,
            newPoints;

        hitPoints = $('#hitPoints').val() | 0;

        newPoints = playerPoints[currentPlayerTurn] - hitPoints;
        if (newPoints < 0) {
            nextTurn();
        } else {
            playerPoints[currentPlayerTurn] = newPoints;
            $('#playerPoints-' + currentPlayerTurn).text(playerPoints[currentPlayerTurn]);

            if (checkIfPlayerWins()) {

            } else {
                nextTurn();
            }
        }
    });

    $body.on('click', '#resetTurnBtn', function() {
        $('#hitPoints').val(0);
    });

    $body.on('click', '#newGameBtn', function() {
        location.reload();
    });

    function checkIfPlayerWins() {
        if (playerPoints[currentPlayerTurn] == 0) {
            finishGame(playerNames[currentPlayerTurn], playerPoints[currentPlayerTurn]);
            return true;
        }

        return false;
    }

    function nextTurn() {
        var previousPlayerTurn = currentPlayerTurn;

        if (currentPlayerTurn + 1 >= numberOfPlayers) {
            currentPlayerTurn = 0;
            checkIfFinalRound();
        } else {
            currentPlayerTurn += 1;
        }

        $('#hitPoints').val('');
        $('#currentPlayerTurnName').text(playerNames[currentPlayerTurn]);

        $('ul#fiveZeroOneScoreUl li#playerLi-' + previousPlayerTurn).removeClass('active');
        $('ul#fiveZeroOneScoreUl li#playerLi-' + currentPlayerTurn).addClass('active');
    }

    function checkIfFinalRound() {
        if (currentRound == numberOfRounds) {
            var winnerPlayerName,
                winnerPlayerPoints,
                previousPlayerPoints = playerPoints[0],
                winnerPlayerIndex = 0,
                currentPlayerPoints;

            for(var i = 1; i < numberOfPlayers; i += 1) {
                currentPlayerPoints = playerPoints[i];

                if (currentPlayerPoints < previousPlayerPoints) {
                    winnerPlayerIndex = i;
                }

                previousPlayerPoints = playerPoints[i];
            }

            winnerPlayerName = playerNames[winnerPlayerIndex];
            winnerPlayerPoints= playerPoints[winnerPlayerIndex];
            finishGame(winnerPlayerName, winnerPlayerPoints);
        } else {
            currentRound += 1;
            $('#currentRound').text(currentRound);
        }
    }

    function finishGame(winnerName, winnerPoints) {
        $('#gameOver').show();
        $('#actionButtons').hide();

        $('#winnerPlayerName').text(winnerName);
        $('#winnerPlayerPoints').text(winnerPoints);
        $('#winnerRound').text(currentRound);

        $body.animate({scrollTop: 0}, 350);
    }
});