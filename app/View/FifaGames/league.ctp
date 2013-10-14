<h1>FIFA League</h1>
<?php
var_dump($all_matches);
?>
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
    <?php foreach($league as $player) : ?>
    <tr>
      <td><?php echo 'XXX'; ?></td>
      <td><?php echo 0; ?></td>
      <td><?php echo 0; ?></td>
      <td><?php echo 0; ?></td>
      <td><?php echo 0; ?></td>
      <td><?php echo 0; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>