<?php
class PoolGamesController extends AppController {

	var $scaffold;

	
	    public function index() 
		{
        //action logic goes here..
		 $conditions = array();
		$rankings = $this->PoolGame->find('all', array(
        //'conditions' => array('Article.status' => 'pending'),
		'fields' => array(
			'Winner.first_name',
			'COUNT(winner) wins',
			'(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id) total_played',
			'(COUNT(winner)/(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id)) win_ratio'
		),
		'group' => array(
			'winner',
		),
		'order' => array(
			'win_ratio DESC',
		),
    ));
    $this->set('rankings', $rankings);
	
		$this->set('poolGames', $this->PoolGame->find('all', array(
			'conditions'=>array(),
			'limit' => 10,
			'order' => array(
				'PoolGame.created DESC',
			),
		)));
	
    }
	
 }
?>
