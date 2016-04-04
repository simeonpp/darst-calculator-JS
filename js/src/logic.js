(function() {
   // Const
   var modes = ['301', 'Cricket', 'CricketTeamplay'];

   var mode,
       numberOfPlayers = 1;

   var modeScreen = $('#modeScreen');


   var modeSelectorButton = $('#modeSelectorButton'),
       modeSelector = $('#modeSelector'),
       playersNumberSelector = $('#playersNumberSelector');

   modeSelectorButton.on('click', function() {
      mode =  modeSelector.val() | 0;
      numberOfPlayers = playersNumberSelector.val() | 0;

      modeScreen.hide();

      switch (mode) {
         case 0:
            fiveZeroOneIFFE(numberOfPlayers);
            break;
         case 1:
            cricketIFFE();
           break;
         case 2:
            cricketTeamPlayIFFE();
           break;
      }
   });







   // Cricket Team 2vs2
   var cricketTeamPlayIFFE = (function() {
      var teamOneScore,
          teamTwoScore;

      var playNames = [];
      var teamOnePoints = 0,
          teamTwoPoints = 0,
          roundNumber = 1,
          maxRoundNumbers = 25;

      var playerScores = [
         { 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 },
         { 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 },
         { 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 },
         { 20:0, 19:0, 18:0, 17:0, 16:0, 15:0, 25:0 }
      ];

      var startGameButton = $('#startGameButton');

      startGameButton.on('click', function() {
         playNames.push($('#teamOnePlayerOneName').val());
         playNames.push($('#teamTwoPlayerOneName').val());
         playNames.push($('#teamOnePlayerTwoName').val());
         playNames.push($('#teamTwoPlayerTwoName').val());
         maxRoundNumbers = $('#roundNumber').val() | 0;
         $('#maxRoundsNumber').text(maxRoundNumbers);

         $('#turnPlayName').text(playNames[0]);
         gameScreen.show();
         setTableNames();

         $('#screenOne').hide();
      });

      function setTableNames() {
         $('#tablePlayName-0').text(playNames[0])
             .addClass('activePlayer');
         $('#tablePlayName-1').text(playNames[1]);
         $('#tablePlayName-2').text(playNames[2]);
         $('#tablePlayName-3').text(playNames[3]);
      }

      var nextPlayerTurn = $('#nextPlayerTurn'),
          currentPlayerTurn = 0,
          hitPointsDiv = $('#hitPoints');

      $('body').on('click', '.availableHitPointsButton', function() {
         var $this = $(this),
             points = $this.attr('data-points'),
             multiplier = $this.attr('data-multiplier');

         for(var i = 0; i < multiplier; i += 1) {
            handleHitPoints(points);
         }
      });

      function handleHitPoints(hitPoints) {
         if (playerScores[currentPlayerTurn][hitPoints] < 3) {
            playerScores[currentPlayerTurn][hitPoints] += 1;
         } else {
            checkForCalc(hitPoints);
         }

         var currentText = hitPointsDiv.text();
         currentText += ", " + hitPoints;
         hitPointsDiv.text(currentText);

         var selector = '#pointHitBox-player-'+ currentPlayerTurn +'-' + hitPoints + '-' + playerScores[currentPlayerTurn][hitPoints];
         $(selector).addClass('pointHitBoxHit');
      }

      function checkForCalc(hitPoints) {
         hitPoints = hitPoints | 0;

         var teamMate = 0,
             otherTeamPlayOne = 0,
             otherTeamPlayerTwo = 0,
             otherTeamNumber = 1;

         if (currentPlayerTurn == 0) {
            teamMate = 2;
            otherTeamPlayOne = 1;
            otherTeamPlayerTwo = 3;
         } else if (currentPlayerTurn == 1) {
            teamMate = 3;
            otherTeamPlayOne = 0;
            otherTeamPlayerTwo = 2;
            otherTeamNumber = 0;
         } else if (currentPlayerTurn == 2) {
            teamMate = 0;
            otherTeamPlayOne = 1;
            otherTeamPlayerTwo = 3;
         } else if (currentPlayerTurn == 3) {
            teamMate = 1;
            otherTeamPlayOne = 0;
            otherTeamPlayerTwo = 2;
            otherTeamNumber = 0;
         }

         if (playerScores[teamMate][hitPoints] == 3) {
            var selector = "#teamPoints-" + otherTeamNumber,
                currentPoints = 0;
            if (playerScores[otherTeamPlayOne][hitPoints] < 3) {
               currentPoints = $(selector).text() | 0;
               $(selector).text(currentPoints + hitPoints);
            }

            if (playerScores[otherTeamPlayerTwo][hitPoints] < 3) {
               currentPoints = $(selector).text() | 0;
               $(selector).text(currentPoints + hitPoints);
            }
         }
      }

      nextPlayerTurn.on('click', function() {
         $('#tablePlayName-' + currentPlayerTurn).removeClass('activePlayer');

         if (currentPlayerTurn == 3) {
            currentPlayerTurn = 0;

            roundNumber += 1;
            $('#currentRound').text(roundNumber);

         } else {
            currentPlayerTurn += 1;
         }

         $('#tablePlayName-' + currentPlayerTurn).addClass('activePlayer');

         $('#turnPlayName').text(playNames[currentPlayerTurn]);
         $('#hitPoints').text('');
      })
   });

}());