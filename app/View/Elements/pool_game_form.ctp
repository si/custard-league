<?php
echo $this->Form->create();
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
        name="data[PoolGame][player_1]" 
        id="PoolGamePlayer1<?php echo $player['Player1']['id']; ?>" 
        value="<?php echo $player['Player1']['id']; ?>"
        <?php if(isset($this->data['PoolGame']) && $player['Player1']['id']==$this->data['PoolGame']['player_1']) echo 'checked="checked"'; ?> />
      <img src="/img/avatars/<?php echo ($player['Player1']['avatar']!='') ? $player['Player1']['avatar'] : 'unknown.jpg'; ?>" alt="" />
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
        name="data[PoolGame][player_2]" 
        id="PoolGamePlayer<?php echo $player['Player1']['id']; ?>" 
        value="<?php echo $player['Player1']['id']; ?>" />
      <img src="/img/avatars/<?php echo ($player['Player1']['avatar']!='') ? $player['Player1']['avatar'] : 'unknown.jpg'; ?>" alt="" />
      <span><?php echo $player['Player1']['first_name']; ?></span>
    </label>
  <?php endforeach; ?>
    </div>
  </fieldset>
    
  <?php echo $this->Form->input('winner', array('options'=>array(1=>'Player 1',2=>'Player 2'), 'type' => 'radio')); ?>    

  <?php echo $this->Form->input('created', array('type' => 'datetime','format'=> 'DMY', 'label'=>'When', 'class' =>'optional')); ?>
  
  <?php echo $this->Form->button('Save Game', array('class'=>'cta')); ?>

</fieldset>

<?php echo $this->Form->end(); ?>