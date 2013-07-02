<?php
//var_dump($poolGame);

if(count($poolGame)>0) :
?>
<div class="row">
    <div class="centered ten columns">
        <h1>
            <?php
                echo $this->Html->tag((($poolGame['PoolGame']['player_1']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player1']['first_name']);
            ?>
            vs
            <?php echo $this->Html->tag((($poolGame['PoolGame']['player_2']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player2']['first_name']); ?>
        </h1>
        <p>
            <i class="icon-clock"></i>
            <?php echo $this->Time->nice($poolGame['PoolGame']['created']); ?>
        </p>
        <p><?php echo $this->Html->link('Back to League',array('action'=>'index')); ?></p>
    </div>
</div>
<?php
endif;
?>