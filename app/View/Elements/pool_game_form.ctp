<?php
echo $this->Form->create('PoolGame');
if(isset($poolGame)) echo $this->Form->input('id', $poolGame['PoolGame']['id']);
?>
<fieldset>
  <legend>New Game</legend>

  <fieldset class="user-scroll">
    <legend>Player 1</legend>
    <div>
  <?php foreach($players_extra as $player) :   ?>
    <label>
      <input type="radio" 
        name="player_1" 
        id="player_1_<?php echo $player['Player1']['id']; ?>" 
        value="<?php echo $player['Player1']['id']; ?>" />
      <img src="/img/avatars/<?php echo $player['Player1']['avatar']; ?>" alt="" />
      <span><?php echo $player['Player1']['first_name']; ?></span>
    </label>
  <?php endforeach; ?>
    </div>
  </fieldset>

  <fieldset class="user-scroll">
    <legend>Player 2</legend>
    <div>
  <?php foreach($players_extra as $player) :   ?>
    <label>
      <input type="radio" 
        name="player_2" 
        id="player_2_<?php echo $player['Player1']['id']; ?>" 
        value="<?php echo $player['Player1']['id']; ?>" />
      <img src="/img/avatars/<?php echo $player['Player1']['avatar']; ?>" alt="" />
      <span><?php echo $player['Player1']['first_name']; ?></span>
    </label>
  <?php endforeach; ?>
    </div>
  </fieldset>
  
  <?php // echo $this->Form->input('player_1',array('type'=>'radio', 'options'=>$players, 'div'=>'user-select', 'separator'=>'IMG')); ?>
  <?php // echo $this->Form->input('player_2',array('type'=>'radio', 'options'=>$players, 'div'=>'user-select')); ?>
  
  <?php echo $this->Form->input('winner', array('options'=>array(1=>'Player 1',2=>'Player 2'), 'type' => 'radio')); ?>    
  
  <?php echo $this->Form->button('Save Game', array('class'=>'big')); ?>

</fieldset>

<?php echo $this->Form->end(); ?>