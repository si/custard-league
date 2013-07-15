<?php
echo $this->Form->create('PoolGame');
if(isset($poolGame)) echo $this->Form->input('id', $poolGame['PoolGame']['id']);
?>
<fieldset>
    <legend>New Game</legend>
    <div class="grid">
        <div class="row">
            <div class="span6">
    			<?php echo $this->Form->input('player_1',array('options'=>$players, 'div'=>'input-control select')); ?>
			</div>
			<div class="span6">
    			<?php echo $this->Form->input('player_2',array('options'=>$players, 'div'=>'input-control select')); ?>
    		</div>
    	</div>
    	<div class="row">
    		<div class="span12">
			    <?php echo $this->Form->input('winner', array('options'=>array(1=>'Player 1',2=>'Player 2'), 'type' => 'radio')); ?>    
			 </div>
		</div>
    </div>
    <?php // echo $this->Form->input('winner',array('options'=>$players, 'div'=>'input-control select')); ?>

    <?php echo $this->Form->button('Save Game'); ?>
</fieldset>



<?php echo $this->Form->end(); ?>