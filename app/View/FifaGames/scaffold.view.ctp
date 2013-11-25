<h1>Match Details</h1>
<h2>
  <?php echo $fifaGame['Player1']['first_name'] . ' (' . $fifaGame['FifaGame']['player_1_team'] . ')'; ?>
  <?php echo $fifaGame['FifaGame']['player_1_score'] . '-' . $fifaGame['FifaGame']['player_2_score']; ?>
  <?php echo $fifaGame['Player2']['first_name'] . ' (' . $fifaGame['FifaGame']['player_2_team'] . ')'; ?>
</h2>
<p><?php echo $this->Time->nice($fifaGame['FifaGame']['created']); ?></p>

<?php if($fifaGame['FifaGame']['comments']!='') : ?>
<h3>Comments</h3>
<p><?php echo $fifaGame['FifaGame']['comments']; ?></p>
<?php endif; ?>

<ul class="actions">
<li><?php echo $this->Html->link('Recent Games',array('action'=>'index')); ?></li>
<li><?php echo $this->Html->link('FIFA League',array('action'=>'league')); ?></li>
</ul>