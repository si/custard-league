<?php
$this->set('title_for_layout', 'FIFA Games');
$this->pageTitle = 'FIFA Games';
?>
<h1>FIFA Games</h1>
<?php
echo $this->element('fifa_games_actions');
?>

<?php if (isset($fifaGames)) : ?>
<section class="col-2" id="history">
	<h2>Last <?php echo $limit; ?> Games</h2>
	<table>
		<thead>
			<tr>
				<th>Player 1</th>
				<th>Score</th>
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
					<strong>
						<?php echo $game['FifaGame']['player_1_score'] . '-' . $game['FifaGame']['player_2_score']; ?>
					</strong>
					<br>
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
