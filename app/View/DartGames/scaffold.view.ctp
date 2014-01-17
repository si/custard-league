<?php
//var_dump($dartGame);

$this->layout = 'custard';

if(count($dartGame)>0) :
?>
    <h1>
        <span class="player-1">
            <img src="/img/avatars/<?php echo $dartGame['Player1']['avatar']; ?>" alt="" class="avatar">
            <?php
                echo $this->Html->tag((($dartGame['DartGame']['player_1']==$dartGame['DartGame']['winner']) ? 'strong' : 'span'), $dartGame['Player1']['first_name']);
            ?>
        </span>
        <span class="vs">vs</span>
        <span class="player-2">
            <img src="/img/avatars/<?php echo $dartGame['Player2']['avatar']; ?>" alt="" class="avatar">
            <?php echo $this->Html->tag((($dartGame['DartGame']['player_2']==$dartGame['DartGame']['winner']) ? 'strong' : 'span'), $dartGame['Player2']['first_name']); ?>
        </span>
    </h1>
    <p>
        <?php echo $this->Time->nice($dartGame['DartGame']['created']); ?>
    </p>
    <?php echo $this->Html->link('Edit Game',array('action'=>'edit',$dartGame['DartGame']['id']), array('class'=>'button')); ?>
    <p><?php echo $this->Html->link('Back to League',array('action'=>'index')); ?></p>

<?php
endif;
?>