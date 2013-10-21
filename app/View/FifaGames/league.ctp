<h1>FIFA League</h1>

<table>
  <thead>
    <tr>
      <th>Player</th>
      <th>Played</th>
      <th>Won</th>
      <th>Draw</th>
      <th>Lost</th>
      <th>Points</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($league as $player_id => $player) : ?>
    <tr>
      <td><?php echo $this->Html->link($player['name'],array('controller'=>'users','action'=>'view',$player_id)); ?></td>
      <td><?php echo $player['played']; ?></td>
      <td><?php echo $player['wins']; ?></td>
      <td><?php echo $player['draws']; ?></td>
      <td><?php echo $player['losses']; ?></td>
      <td><?php echo $player['points']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>