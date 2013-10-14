<?php
$this->set('title_for_layout', 'FIFA Games');
$this->pageTitle = 'FIFA Games';
?>
<h1>FIFA Games</h1>
<?php
//var_dump($poolGames);
?>

<?php echo $this->Html->link('New Game',array('action'=>'add'),array('class'=>'cta')); ?>

<?php if (isset($fifaGames)) : ?>
<section class="col-2" id="history">
	<h2>Last 10 Games</h2>
	<table>
		<thead>
			<tr>
				<th>Player 1</th>
				<th>Scores</th>
				<th>Player 2</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach($fifaGames as $game) :
		?>
			<tr>
				<td><?php echo $game['Player1']['first_name']; ?><br>
					<small>(<?php echo $game['FifaGame']['player_1_team']; ?>)</small></td>
				<td>
					<?php echo $game['FifaGame']['player_1_score'] . '-' . $game['FifaGame']['player_2_score']; ?><br>
					<small><?php echo $this->Html->link($this->Time->niceShort($game['FifaGame']['created']),array('action'=>'view',$game['FifaGame']['id'])); ?></small>
				</td>
				<td><?php echo $game['Player2']['first_name']; ?><br>
					<small>(<?php echo $game['FifaGame']['player_2_team']; ?>)</small></td>
			</tr>
		<?php
		endforeach;
		?>

		</tbody>
	</table>
</section>
<?php endif; ?>
<?php
if (isset($rankings)) : 
?>
<section class="col-2" id="rankings">
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
				<td class="position"><?php echo $index+1; ?></td>
				<td class="team-<?php echo $game['Winner']['team_id']; ?>"><?php echo $game['Winner']['first_name']; ?></td>
				<td class="score">
				  <strong><?php echo $this->Number->toPercentage($game[0]['win_ratio']*100,1); ?></strong>
				  <small>(<?php echo $game[0]['wins'] . '/' . $game[0]['total_played']; ?>)</small>
				</td>
			</tr>
		<?php
		endforeach;
		?>
		</tbody>
	</table>
</section>
<?php endif; ?>

