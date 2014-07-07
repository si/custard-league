<?php echo $this->Form->create(); ?>

<table>
  <thead>
    <tr>
      <th>
        <fieldset class="user-scroll">
          <legend>Player 1</legend>
          <div>
        <?php foreach($players_extra as $player) :   ?>
          <label>
            <input type="radio" 
              name="data[DartGame][player_1]" 
              id="DartGamePlayer1<?php echo $player['Player1']['id']; ?>" 
              value="<?php echo $player['Player1']['id']; ?>"
              <?php if(!empty($this->data) && $player['Player1']['id']==$this->data['DartGame']['player_1']) echo 'checked="checked"'; ?> />
            <img src="/img/avatars/<?php echo ($player['Player1']['avatar']!='') ? $player['Player1']['avatar'] : 'unknown.jpg'; ?>" alt="" />
            <span><?php echo $player['Player1']['first_name']; ?></span>
          </label>
        <?php endforeach; ?>
          </div>
        </fieldset>
      </th>
      <th>
        <fieldset class="user-scroll">
          <legend>Player 2</legend>
          <div>
        <?php foreach($players_extra as $player) :   ?>
          <label>
            <input type="radio" 
              name="data[DartGame][player_2]" 
              id="DartGamePlayer2<?php echo $player['Player1']['id']; ?>" 
              value="<?php echo $player['Player1']['id']; ?>"
              <?php if(!empty($this->data) && $player['Player1']['id']==$this->data['DartGame']['player_2']) echo 'checked="checked"'; ?> />
            <img src="/img/avatars/<?php echo ($player['Player1']['avatar']!='') ? $player['Player1']['avatar'] : 'unknown.jpg'; ?>" alt="" />
            <span><?php echo $player['Player1']['first_name']; ?></span>
          </label>
        <?php endforeach; ?>
          </div>
        </fieldset>
      </th>
    </tr>
    <tr>
      <th data-bind="value: player1Remaining">301</th>
      <th data-bind="value: player2Remaining">301</th>
    </tr>
  </thead>

  <tbody>
    <!-- ko foreach: score -->
    <tr>
      <td><input type="number" placeholder="301" data-bind="value: player1Score"></td>
      <td><input type="number" placeholder="301" data-bind="value: player2Score"></td>
    </tr>
    <!-- /ko -->
  </tbody>

</table>  

<?php echo $this->Form->end(); ?>