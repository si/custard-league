<?php
//var_dump($poolGame);
if(count($poolGame)>0) :
?>
    <h1>
        <span class="player-1">
            <img src="/img/avatars/<?php echo $poolGame['Player1']['avatar']; ?>" alt="" class="avatar">
            <?php
                echo $this->Html->tag((($poolGame['PoolGame']['player_1']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player1']['first_name']);
            ?>
        </span>
        <span class="vs">vs</span>
        <span class="player-2">
            <img src="/img/avatars/<?php echo $poolGame['Player2']['avatar']; ?>" alt="" class="avatar">
            <?php echo $this->Html->tag((($poolGame['PoolGame']['player_2']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player2']['first_name']); ?>
        </span>
    </h1>
    <p>
        <?php echo $this->Time->nice($poolGame['PoolGame']['created']); ?>
    </p>
    <?php echo $this->Html->link('Edit Game',array('action'=>'edit',$poolGame['PoolGame']['id']), array('class'=>'button')); ?>
    <p><?php echo $this->Html->link('Back to League',array('action'=>'index')); ?></p>

<?php
endif;
?>