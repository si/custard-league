<?php
$this->set('title_for_layout', 'Pool Games');
?>
<h1>Pool Games</h1>
<?php
//var_dump($poolGames);
?>

<?php echo $this->Html->link('New Game',array('action'=>'add'),array('class'=>'command-button default')); ?>

<?php
if (isset($rankings)) : 
?>
<h2>Pool Rankings</h2>
<table>
<thead>
<tr>
<th>Position</th>
<th>Player</th>
<th>Score</th>
</tr>
</thead>
<tbody>
<?php
foreach($rankings as $index=>$game) :
?>
<tr>
	<td><?php echo $index+1; ?></td>
	<td><?php echo $game['Winner']['first_name']; ?></td>
	<td>
	  <strong><?php echo $this->Number->toPercentage($game[0]['win_ratio']*100,1); ?></strong>
	  <small>(<?php echo $game[0]['wins'] . '/' . $game[0]['total_played']; ?>)</small>
	</td>
</tr>
<?php
endforeach;
?>
</tbody>
</table>
<?php endif; ?>

<?php if (isset($poolGames)) : ?>
<h2>Last 10 Games</h2>
<table>
<thead>
<tr>
<th>Time</th>
<th>Player 1</th>
<th>Player 2</th>
</tr>
</thead>
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
<?php endif; ?>