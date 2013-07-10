<?php
class PoolGamesController extends AppController {
	var $scaffold;
	public function index() {
		//action logic goes here..
		$conditions = array();
		$rankings = $this->PoolGame->find('all', array(		'fields' => array(			'Winner.first_name',			'COUNT(winner) wins',			'(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id) total_played',			'(COUNT(winner)/(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id)) win_ratio'		),		'group' => array(			'winner',		),		'order' => array(			'win_ratio DESC',		),		));
		$this->set('rankings', $rankings);
		$this->set('poolGames', $this->PoolGame->find('all', array(			'conditions'=>array(),			'limit' => 10,			'order' => array(				'PoolGame.created DESC',			),		)));
	}
	public function form($id='') {
		
		if(isset($this->data['PoolGame'])) {
			var_dump($this->data);
			$this->data['PoolGame']['winner'] = $this->data['PoolGame']['player_' . $this->data['PoolGame']['winner']];
			echo 'Winner is ' . $this->data['PoolGame']['winner'];
		}
		
		if($id!='') {
			$conditions = array();
			$conditions['id'] = $id;
			$poolGame = $this->PoolGame->find('first', array('conditions'=>$conditions));
			$this->set('poolGame', $poolGame);
		}
		$this->set('players', $this->PoolGame->Player1->find('list'));
		
	}
	
}