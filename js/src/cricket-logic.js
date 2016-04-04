var cricketIFFE = (function(numberOfPlayers) {
    var numberOfRounds = 25,
        playerPoints = [],
        playerNames = [],
        currentPlayerTurn = 0,
        currentRound = 1,
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
    })
});