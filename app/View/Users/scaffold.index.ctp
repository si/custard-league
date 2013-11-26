<h1>Users</h1>

<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Team</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach($users as $user) :
  ?>
    <tr>
      <td>
      <?php echo $this->Html->link('<img src="/img/avatars/' . $user['User']['avatar'] . '" class="avatar">' . $user['User']['first_name'], array('action'=>'view',$user['User']['id']),array('escape'=>false)); ?>
      </td>
      <td>
        <?php echo $user['Team']['name']; ?>
      </td>
    </tr>
    <?php
    endforeach;
    ?>
  </tbody>
</table>