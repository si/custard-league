<?php
$this->set('title_for_layout', 'New FIFA Game');
?>
<h1>New Game</h1>
<?php
  echo $this->Form->create('FifaGame');
?>
  <fieldset class="player-1">
    <legend>Player 1</legend>
    
    <?php echo $this->Form->input('player_1', array('options'=>$players,'empty'=>'-')); ?>
    <?php echo $this->Form->input('player_1_team'); ?>
    <?php echo $this->Form->input('player_1_score'); ?>
  
  </fieldset>
  
  <fieldset class="player-2">
    <legend>Player 2</legend>
    
    <?php echo $this->Form->input('player_2', array('options'=>$players,'empty'=>'-')); ?>
    <?php echo $this->Form->input('player_2_team'); ?>
    <?php echo $this->Form->input('player_2_score'); ?>
  
  </fieldset>
  
  <fieldset class="other">
    <legend>Other</legend>
    
    <?php echo $this->Form->input('penalties', array('type'=>'checkbox')); ?>
    <?php echo $this->Form->input('comments', array('type'=>'textarea')); ?>
    
  </fieldset>
  
  <?php echo $this->Form->button('Save', array('class'=>'cta')); ?>
  <?php echo $this->Html->link('Cancel',array('action'=>'index')); ?>

<?php
  echo $this->Form->end();
?>