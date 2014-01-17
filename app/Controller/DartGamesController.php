<?php
class DartGamesController extends AppController {

	var $scaffold;
	
	function beforeRender() {
    parent::beforeRender();
  }

	function beforeFilter() {
    parent::beforeFilter();
  }

	public function index() {

		$conditions = array();

		$rankings = $this->DartGame->find('all', array(
		'fields' => array(
			'Winner.first_name',
			'Winner.team_id',
			'COUNT(winner) wins',
			'(SELECT COUNT(*) FROM dart_games WHERE player_1 = Winner.id OR player_2 = Winner.id) total_played',
			'(COUNT(winner)/(SELECT COUNT(*) FROM dart_games WHERE player_1 = Winner.id OR player_2 = Winner.id)) win_ratio'
		),
		'group' => array(
			'winner',
		),
		'order' => array(
			'win_ratio DESC',
		),
		));

		$this->set('rankings', $rankings);

		$this->set('dartGames', $this->DartGame->find('all', array(
			'conditions'=>array(),
			'limit' => 10,
			'order' => array(
				'DartGame.created DESC',
			),
		)));

	}

/* 	public function view($id='') {

		if($id!='') {
			$dartGame = $this->DartGame->findById($id);
			$this->set('dartGame', $dartGame);
		}

	}
 */
}