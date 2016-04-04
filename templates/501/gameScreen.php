<script id="501-game-screen" type="text/x-handlebars-template">
    <div id="gameOver">
        <div id="winnerPlayerName"></div> wins with
        <div id="winnerPlayerPoints"></div> points on round
        <div id="winnerRound"></div>
        <div id="newGameBtn" class="btn btn-default" style="margin:15px 0 0 10px">New game</div>
    </div>

    <h2>Round <span id="currentRound">{{currentRound}}</span> / <span id="roundNumber">{{numberOfRounds}}</span></h2>

    <section>
        <ul id="fiveZeroOneScoreUl">
            {{#each players as |player|}}
                <li id="playerLi-{{@index}}">{{player.name}} - <span id="playerPoints-{{@index}}">{{player.points}}</span></li>
            {{/each}}
        </ul>


        <h2 id="currentPlayerTurnName">{{currentPlayerTurnName}}</h2>

        <div class="form-group" style="width: 350px">
            <label for="hitPoints" class="col-lg-4 control-label">Hit points: </label>
            <div class="col-lg-8">
                <input type="number" class="form-control" id="hitPoints" placeholder="Points">
            </div>
        </div>

        <div id="actionButtons">
            <div id="nextTurnBtn" class="btn btn-success" style="margin:15px 0 0 10px">Next player</div>
            <div id="resetTurnBtn" class="btn btn-default" style="margin:15px 0 0 10px">Reset current turn</div>
        </div>

    </section>
</script>