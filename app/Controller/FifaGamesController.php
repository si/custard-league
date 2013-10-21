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

    $league = $results = array();
		$schema = array('name'=>'','played'=>0,'wins'=>0,'draws'=>0,'losses'=>0,'points'=>0 );

		$players = $this->FifaGame->Player1->find('list');
		$this->set('players', $players);
		
		foreach($players as $user_id=>$name) {
  		$results[$user_id] = $schema;
  		$results[$user_id]['name'] = $name;
		}
		
		// Get all matches
		$all_matches = $this->FifaGame->find('all');

    // Populate wins, draws and losses
		foreach($all_matches as $match) {
      
      $results[ $match['FifaGame']['player_1'] ]['played'] ++;
      $results[ $match['FifaGame']['player_2'] ]['played'] ++;
		  
			if($match['FifaGame']['player_1_score'] > $match['FifaGame']['player_2_score']) {
			  // Player 1 won
				$results[ $match['FifaGame']['player_1'] ]['wins'] ++;
				$results[ $match['FifaGame']['player_2'] ]['losses'] ++;
			}
			elseif($match['FifaGame']['player_1_score'] == $match['FifaGame']['player_2_score']) {
			  // Draw
				$results[ $match['FifaGame']['player_1'] ]['draws']++;
				$results[ $match['FifaGame']['player_2'] ]['draws']++;
			}
			else {
			  // Player 2 won
				$results[ $match['FifaGame']['player_1'] ]['losses']++;
				$results[ $match['FifaGame']['player_2'] ]['wins']++;
			}
//		  echo '</li>';
		}

    // Calcuate points based on stats
		foreach($results as $id=>$player) {
		  // Three points for a win
		  $results[$id]['points'] += $player['wins'] * 3;
		  // 1 point for a draw
		  $results[$id]['points'] += $player['draws'] * 1;
		}
		
		// Now order the table based on points
		array_sort($results,'!points','played');

		$this->set('league', $results);
		$this->set('all_matches',$all_matches);

	}

}