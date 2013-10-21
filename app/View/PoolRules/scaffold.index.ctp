<h1>
    Pool Rules
</h1>
<ol>
<?php
foreach($poolRules as $rule) :
?>
<li>
    <?php echo $rule['PoolRule']['rule']; ?>
    <small>
        <?php echo $this->Time->niceShort($rule['PoolRule']['created']); ?>
        <?php echo $this->Html->link('Edit',array('action'=>'edit',$rule['PoolRule']['id'])); ?>
        <?php echo $this->Html->link('Delete',array('action'=>'delete',$rule['PoolRule']['id']),null,'Are you sure you want to remove this rule?'); ?>
    </small>
</li>
<?php
endforeach;
?>
</ol>

<div class=" primary btn"><?php echo $this->Html->link('New Rule', array('action'=>'add')); ?></div>