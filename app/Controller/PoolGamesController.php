<?php
class PoolGamesController extends AppController {

	var $scaffold;
	
	function beforeRender() {
    parent::beforeRender();
  }

	function beforeFilter() {
    parent::beforeFilter();
  }

	public function index() {

		$conditions = array();

		$rankings = $this->PoolGame->find('all', array(
		'fields' => array(
			'Winner.first_name',
			'Winner.team_id',
			'COUNT(winner) wins',
			'(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id) total_played',
			'(COUNT(winner)/(SELECT COUNT(*) FROM pool_games WHERE player_1 = Winner.id OR player_2 = Winner.id)) win_ratio'
		),
/*
		'where' => array(
		  'PoolGames.created > CURDATE()-14',
		),

*/		'group' => array(
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
		$this->set('players_extra', $this->PoolGame->Player1->find('all',array(
		  'fields'=>array('id','first_name','avatar')
		  ,'conditions'=>array('disabled IS NULL')
		)));
  }
  
  public function view($id='') {

		if($id!='') {
			$poolGame = $this->PoolGame->findById($id);
			$this->set('poolGame', $poolGame);
		}

	}

}