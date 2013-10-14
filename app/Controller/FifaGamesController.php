<?php
class FifaGamesController extends AppController {

	var $scaffold;

	function index() {
		$this->set('fifaGames', $this->FifaGame->find('all',
			array(
				'count'=>10,
				'order'=>'FifaGame.created DESC'
			)
		));

	}

	function league() {

/*
    $league_sql = 'SELECT 
                    IF(
                      player_1_score > player_2_score, 
                      3, 
                      IF(
                        player_2_score = player_2_score, 
                        1,
                        0
                      )
                      
                    ) player_1_points
                   
                  FROM fifa_games';
		$league = $this->FifaGame->query($league_sql);
		$this->set('league',$league);
*/

		$all_matches = $this->FifaGame->find('all');

		/*
		foreach($all_matches as $match) {
			if($match['player_1_score'] > $match['player_2_score']) {
				$league[$match['player_1']]['won']++;
				$league[$match['player_2']]['lost']++;
			}
			elseif($match['player_1_score'] == $match['player_2_score']) {
				$league[$match['player_1']]['draw']++;
				$league[$match['player_2']]['draw']++;
			}
			else {
				$league[$match['player_1']]['lost']++;
				$league[$match['player_2']]['won']++;
			}
		}

		*/

		$this->set('all_matches',$all_matches);

	}

}