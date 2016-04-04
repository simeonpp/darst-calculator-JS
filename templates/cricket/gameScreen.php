<script id="cricket-game-screen" type="text/x-handlebars-template">
    <div id="gameOver">
        <div id="winnerPlayerName"></div> wins on round
        <div id="winnerRound"></div>
        <div id="newGameBtn" class="btn btn-default" style="margin:15px 0 0 10px">New game</div>
    </div>

    <h2>Round <span id="currentRound">{{currentRound}}</span> / <span id="roundNumber">{{numberOfRounds}}</span></h2>

    <ul>
        {{#each players as |player|}}
            <li>{{player.name}}: <span id="playerPiledPoints-{{@index}}">0</span></li>
        {{/each}}
    </ul>

    <table id="cricketScoreTable">
        <thead>
        <tr>
            <th>Name</th>
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
        {{#each players as |player|}}
            <tr>
                <td id="tablePlayName-{{@index}}">{{player.name}}</td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-20-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-20-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-20-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-19-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-19-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-19-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-18-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-18-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-18-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-17-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-17-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-17-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-16-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-16-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-16-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-15-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-15-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-15-3" class="pointHitBox"></div>
                    </div>
                </td>
                <td>
                    <div class="pointHitWrap">
                        <div id="pointHitBox-player-{{@index}}-25-1" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-25-2" class="pointHitBox"></div>
                        <div id="pointHitBox-player-{{@index}}-25-3" class="pointHitBox"></div>
                    </div>
                </td>
            </tr>
        {{/each}}
        </tbody>
    </table>

    <?php include ('cricket-available-points-buttons.php'); ?>

    <section>
        На ред е
        <h2 id="currentPlayerTurnName">{{currentPlayerTurnName}}</h2>
        <div id="hitPoints"></div>

        <div id="actionButtons">
            <div id="nextTurnBtn" class="btn btn-warning btn-lg" style="margin:15px 0 0 10px">Next player</div>
            <div id="resetTurnBtn" class="btn btn-default" style="margin:15px 0 0 10px">Reset current turn</div>
        </div>
    </section>
</script>