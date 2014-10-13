<h1>FIFA League</h1>

<?php
echo $this->element('fifa_games_actions');
?>

<table>
  <colgroup>
    <col class="player">
    <col span="4" class="breakdown">
    <col class="points">
  </colgroup>
  <thead>
    <tr>
      <th>Position</th>
      <th>Player</th>
      <th>Played</th>
      <th>Won</th>
      <th>Draw</th>
      <th>Lost</th>
      <th>Points</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($league as $counter => $player) : ?>
    <tr>
      <td><?php echo $counter+1; ?></td>
      <td><?php echo $player['name']; ?></td>
      <td><?php echo $player['played']; ?></td>
      <td><?php echo $player['wins']; ?></td>
      <td><?php echo $player['draws']; ?></td>
      <td><?php echo $player['losses']; ?></td>
      <td><?php echo $player['points']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>