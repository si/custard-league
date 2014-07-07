<div class="head-to-head">
<?php
//var_dump($poolGame);
if(count($poolGame)>0) :
?>
    <h1>
        <span class="player <?php echo ($poolGame['PoolGame']['player_1']==$poolGame['PoolGame']['winner']) ? 'winner' : ''; ?>">
            <img src="/img/avatars/<?php echo $poolGame['Player1']['avatar']; ?>" alt="" class="avatar">
            <?php
                echo $this->Html->tag((($poolGame['PoolGame']['player_1']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player1']['first_name']);
            ?>
        </span>
        <span class="vs">vs</span>
        <span class="player <?php echo ($poolGame['PoolGame']['player_2']==$poolGame['PoolGame']['winner']) ? 'winner' : ''; ?>">
            <img src="/img/avatars/<?php echo $poolGame['Player2']['avatar']; ?>" alt="" class="avatar">
            <?php echo $this->Html->tag((($poolGame['PoolGame']['player_2']==$poolGame['PoolGame']['winner']) ? 'strong' : 'span'), $poolGame['Player2']['first_name']); ?>
        </span>
    </h1>
    <p class="meta">
        <?php echo $this->Time->nice($poolGame['PoolGame']['created']); ?>
    </p>
    
    <div class="actions">
      <?php echo $this->Html->link('Edit Game',array('action'=>'edit',$poolGame['PoolGame']['id']), array('class'=>'cta')); ?>
      <?php echo $this->Html->link('Back to League',array('action'=>'index')); ?>
    </div>

<?php
endif;
?>
</div>