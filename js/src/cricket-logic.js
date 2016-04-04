var cricketIFFE = (function(numberOfPlayers) {
    var numberOfRounds = 25,
        playerPoints = [],
        playerNames = [],
        currentPlayerTurn = 0,
        currentRound = 1;

    var cricketPlayerFormGroup = $('#cricketPlayerFormGroup');

    for(var i = 1; i <= numberOfPlayers; i +=1) {
        var inputToBeAdded = '<div class="col-lg-12"><label for="playName-'+ i +'" class="col-lg-12 control-label">Играч '+ i + '</label><div class="col-lg-12"><input type="text" class="form-control" id="playName-'+ i + '" placeholder="име"></div></div>';
        cricketPlayerFormGroup.append(inputToBeAdded);

        playerScores.push({ 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 });
        playerPoints.push(0);
        playerNames.push("Player " + i);
    }
});