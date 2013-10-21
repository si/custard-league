<?php
echo $this->Form->create('PoolRule');
    if(isset($this->data['PoolRule']['id'])) echo $this->Form->input('id', array('type'=>'hidden'));
?>
<fieldset>
    <legend>Pool Rule</legend>
    <?php
        echo $this->Form->input('rule', array(
            'type'=>'textarea',
        ));
    ?>
    
</fieldset>

<?php
echo $this->Form->end();
?>