var cricketIFFE = (function(numberOfPlayers) {
    var numberOfRounds = 25,
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

        var source   = $("#cricket-configuration-screen").html();
        var template = Handlebars.compile(source);
        $configurationScreen.append (template(templateData));

        $configurationScreen.show();
    }

    displayConfigurationScreen();
});