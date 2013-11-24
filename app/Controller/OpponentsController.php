<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

class OpponentsController extends AppController {

	/**
	 * Models used
	 *
	 * @var array
	 */
	public $uses = array('Opponent', 'PlayerStat', 'Player');

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array(
		'Number',
		'Js' => array('Jquery')
	);

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
		'GeoIP',
		'RequestHandler',
	);

	//-------------------------------------------------------------------

	/**
	 * Total list of confrontations (do not make this recursive)
	 */
	public function index() {
		$this->Opponent->unbindModel(
			array('belongsTo' => array('Killer', 'Target'))
		);
		$data = $this->Opponent->find('all');
		pr($data);
	}

	//-------------------------------------------------------------------

	/**
	 * List confrontations for a specific player (killer) via dataTables
	 *
	 * @param null $playerID
	 * @return array
	 */
	public function view ($playerID = null) {
		//$this->set('playerID', $playerID);
		$this->layout = 'ajax';

		$opponentsCount = Configure::read('options.opponents_count') ? Configure::read('options.opponents_count') : 15;


		$conditions = array(
			'Opponent.killer_id' => $playerID,
			'Target.hide' => 0,
		);

		$this->Opponent->Behaviors->attach('Containable');
		$this->Opponent->contain(array('Killer.Player', 'Target.Player'));

		$data = $this->Opponent->find('all',
			array(
				'fields' => array(
					'*',
					'(Opponent.kills + Opponent.retals) as confrontations',
				),
				//'recursive' => 2,
				'conditions' => $conditions,
				'order' => 'confrontations DESC',
				'limit' => $opponentsCount,
			)
		);
		if (!$data) {
			if ($this->request->is('requested')) {
				return false;
			}
			else {
				$this->set('opponents', array());
				$this->set('analytics', array());
				return false;
			}
		}

		/**
		 * Add some values to the array, like rank and position
		 */
		foreach ($data as $k => $v) {
			$data[$k]['Target']['rank'] = $this->XlrFunctions->getRank($data[$k]['Target']['kills']);
			$data[$k]['Target']['skilleague'] = $this->XlrFunctions->getLeague($data[$k]['Target']['skill']);
			$data[$k]['Target']['flag'] = $this->XlrFunctions->getFlag($data[$k]['Target']['Player']['ip']);
			$data[$k]['Target']['level'] = $this->XlrFunctions->getLevel($data[$k]['Target']['Player']['group_bits']);
			$data[$k]['0']['winprobability'] = 1 / ( pow( 10, ( ($data[$k]['Target']['skill'] - $data[$k]['Killer']['skill']) / 600 ) ) + 1 );
			$data[$k]['0']['skillgain'] = 4 * (1 - $data[$k]['0']['winprobability']);
		}

/*		foreach ($data as $k => $v) {
			$analytics[$v['Target']['Player']['name']] = array(
				'skill' => $v['Target']['skill'],
				'skillgain' => $v['0']['skillgain'],
				'winprobability' => $v['0']['winprobability']
			);
		}*/
		foreach ($data as $k => $v) {
			$_name[$k] = $v['Target']['Player']['name'];
			$_id[$k] = $v['Target']['id'];
			$_skillgain[$k] = $v['0']['skillgain'];
			$_winprobability[$k] = $v['0']['winprobability'];
			if ($v['Opponent']['kills'] == 0) {
				$_winrate[$k] = 1;
			} else {
				$_winrate[$k] = $v['0']['confrontations'] / $v['Opponent']['kills'];
			}
		}

		array_multisort($_winrate, SORT_DESC, $_skillgain, $_winprobability, $_name, $_id);
		$analytics['worstHistory'] = array($_name['0'], $_id['0'], $_winprobability['0'], 'Worst Enemy', 'Better avoid this opponent next time', 'xlr_pro_killstreak.png');

		array_multisort($_skillgain, SORT_DESC, $_winprobability, $_winrate, $_name, $_id);
		$analytics['mostSkillGain'] = array($_name['0'], $_id['0'], $_skillgain['0'], 'Skill Booster', 'Gain optimal skill by winning next confrontation', 'xlr_pro_default.png');

		array_multisort($_winprobability, SORT_DESC, $_skillgain, $_winrate, $_name, $_id);
		$analytics['bestChance'] = array($_name['0'], $_id['0'], $_winprobability['0'], 'Push Over', 'Collect your easy points here', 'xlr_shame_loosestreak.png');

		array_multisort($_winrate, SORT_ASC, $_skillgain, $_winprobability, $_name, $_id);
		$analytics['bestHistory'] = array($_name['0'], $_id['0'], $_winprobability['0'], 'Skill Sponsor', 'Paid his dues, better thank this opponent next time around', 'xlr_shame_deaths.png');

        //pr($_name);
		//pr($_skill);
		//pr($_skillgain);
		//pr($_winprobability);

		if ($this->request->is('requested')) {
			return array($data);
		}
		else {
			$this->set('opponents', $data);
			$this->set('analytics', $analytics);
		}
		//pr($analytics);
		//pr($data);
	}

	//-------------------------------------------------------------------

	/**
	 * View a specific confrontation
	 *
	 * @param null $id
	 */
	public function detail ($id = null) {
		$this->Opponent->id = $id;
		$this->Opponent->recursive = 2;
		$data = $this->Opponent->read();
		pr($data);
	}

	//-------------------------------------------------------------------

	public function compare ($killerID = null, $targetID = null) {

		$conditions = array(
			'Opponent.killer_id' => $killerID,
			'Opponent.target_id' => $targetID,
			'Target.hide' => 0,
		);

		$data = $this->Opponent->find('all',
			array(
				'fields' => array(
					'*',
					'(Opponent.kills + Opponent.retals) as confrontations',
				),
				'recursive' => 2,
				'conditions' => $conditions,
				'order' => 'confrontations DESC',
				//'limit' => '10',
			)
		);


		/**
		 * Add some values to the array, like rank and position
		 */
		foreach ($data as $k => $v) {
			$data[$k]['Killer']['rank'] = $this->XlrFunctions->getRank($data[$k]['Killer']['kills']);
			$data[$k]['Target']['rank'] = $this->XlrFunctions->getRank($data[$k]['Target']['kills']);
			$data[$k]['Killer']['skilleague'] = $this->XlrFunctions->getLeague($data[$k]['Killer']['skill']);
			$data[$k]['Target']['skilleague'] = $this->XlrFunctions->getLeague($data[$k]['Target']['skill']);
			$data[$k]['Killer']['flag'] = $this->XlrFunctions->getFlag($data[$k]['Killer']['Player']['ip']);
			$data[$k]['Target']['flag'] = $this->XlrFunctions->getFlag($data[$k]['Target']['Player']['ip']);
			$data[$k]['Killer']['level'] = $this->XlrFunctions->getLevel($data[$k]['Killer']['Player']['group_bits']);
			$data[$k]['Target']['level'] = $this->XlrFunctions->getLevel($data[$k]['Target']['Player']['group_bits']);
			$data[$k]['Killer']['winprobability'] = 1 / ( pow( 10, ( ($data[$k]['Target']['skill'] - $data[$k]['Killer']['skill']) / 600 ) ) + 1 );
			$data[$k]['Killer']['skillgain'] = 4 * (1 - $data[$k]['Killer']['winprobability']);
			$data[$k]['Target']['winprobability'] = 1 - $data[$k]['Killer']['winprobability'];
			$data[$k]['Target']['skillgain'] = 4 * (1 - $data[$k]['Target']['winprobability']);
		}

		if ($this->request->is('requested')) {
			return array($data);
		}
		else {
			$this->set('opponents', $data);
		}
		//pr($data);
	}

	public function shortList ($playerID = null) {
		$conditions = array(
			'Opponent.killer_id' => $playerID,
			'Target.hide' => 0,
		);

		$data = $this->Opponent->find('all',
			array(
				'fields' => array(
					'*',
					'(Opponent.kills + Opponent.retals) as confrontations',
				),
				'recursive' => 2,
				'conditions' => $conditions,
				'order' => 'RAND()',
				'limit' => '18',
			)
		);
		if ($this->request->is('requested')) {
			return array($data);
		}
		else {
			$this->set('opponents', $data);
		}
		//pr($data);
	}
}