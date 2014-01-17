<img src="/img/avatars/<?php echo $user['User']['avatar']; ?>" alt="" class="avatar avatar-lg">
<h1><?php echo $user['User']['first_name']; ?></h1>

<h2><?php echo count($user['PoolGamesPlayed']); ?> pool games </h2>
<table>
  <thead>
    <tr>
      <th>Played</th>
      <th>When</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($user['PoolGamesPlayed'] as $pool_game) : ?>
  <tr>
    <td><?php echo $this->Html->link($pool_game['player_2'], array('controller'=>'users','action'=>'view',$pool_game['player_2'])); ?></td>
    <td><?php echo $this->Html->link($this->Time->niceShort($pool_game['created']), array('controller'=>'pool_games','action'=>'view',$pool_game['id'])); ?></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<h2><?php echo count($user['FifaGamesPlayed']); ?> FIFA games </h2>
<table>
  <thead>
    <tr>
      <th>Played</th>
      <th>When</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($user['FifaGamesPlayed'] as $fifa_game) : ?>
  <tr>
    <td><?php echo $this->Html->link($fifa_game['player_2'], array('controller'=>'users','action'=>'view',$fifa_game['player_2'])); ?></td>
    <td><?php echo $this->Html->link($this->Time->niceShort($fifa_game['created']), array('controller'=>'fifa_games','action'=>'view',$fifa_game['id'])) ?></td>
  </tr>
  <?php endforeach; ?>
  </tbody>
</table>



<?php var_dump($user); ?>
