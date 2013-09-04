<?php
$this->pageTitle = 'Pool Games';
?>
<h1>Pool Games</h1>
<?php
//var_dump($poolGames);
?>
<div class="medium primary btn"><?php echo $this->Html->link('New Game',array('action'=>'add')); ?></div>
<table>
<tbody>
<?php
foreach($poolGames as $game) :
?>
<tr>
	<td><?php echo $this->Html->link($this->Time->niceShort($game['PoolGame']['created']),array('action'=>'view',$game['PoolGame']['id'])); ?></td>
	<td><?php echo (($game['PoolGame']['winner']==$game['PoolGame']['player_1']) ? '<strong>' : '') . $game['Player1']['first_name'] . (($game['PoolGame']['winner']==$game['PoolGame']['player_1']) ? '</strong>' : ''); ?></td>
	<td><?php echo (($game['PoolGame']['winner']==$game['PoolGame']['player_2']) ? '<strong>' : '') . $game['Player2']['first_name'] . (($game['PoolGame']['winner']==$game['PoolGame']['player_2']) ? '</strong>' : ''); ?></td>
</tr>
<?php
endforeach;
?>
</tbody>
</table>