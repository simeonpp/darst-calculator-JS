<script id="cricket-configuration-screen" type="text/x-handlebars-template">
    <section>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title" id="configurationTitle">Cricket Configuration</h3>
            </div>
            <div class="panel-body">

                <form action="">
                    <div class="form-group">
                        <label for="numberOfRounds" class="col-lg-4 control-label">Rounds</label>
                        <div class="col-lg-8">
                            <input type="number" class="form-control" id="numberOfRounds" placeholder="Rounds" value="25">
                        </div>
                    </div>

                    {{#each players}}
                    <div class="form-group">
                        <label for="playerName-{{@index}}" class="col-lg-4 control-label">Player {{this}}</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" id="playerName-{{@index}}" placeholder="Name">
                        </div>
                    </div>
                    {{/each}}

                    <div id="startGameButton" class="btn btn-success" style="margin:15px 0 0 10px">Start game</div>

                </form>
            </div>
        </div>
    </section>
</script>