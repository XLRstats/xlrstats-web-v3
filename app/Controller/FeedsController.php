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

App::uses('Xml', 'Utility');

/**
 * Class FeedsController
 */
class FeedsController extends AppController {

/**
 * @var string URL to default feed if no feed_id was given in URL or feed_id does not exist in the config
 */
	public $feedURL = "http://forum.bigbrotherbot.net/website-news/?type=rss;action=.xml";

/**
 * @var array
 */
	public $rssItem = array();

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Html', 'Form', 'Js' => array('Jquery'));

	//-------------------------------------------------------------------

	public function index() {
		//pr(Configure::read('globals.feed'));
	}

	//-------------------------------------------------------------------

/**
 * Parse the feed and return as an array
 *
 * @param string $feedID
 * @return array
 * @internal param $
 */
	public function view($feedID = '') {
		if ($feedID != '') {
			if ((Configure::read('globals.feed.' . $feedID ) != null)) {
				$feedDetails = Configure::read('globals.feed.' . $feedID);
				$this->feedURL = $feedDetails[0];
			}
		}

		$parsedXML = Xml::build($this->feedURL);

		// xml to array conversion
		$this->rssItem = Xml::toArray($parsedXML);

		$feedInfo = $this->rssItem['rss']['channel'];
		$data = $this->rssItem['rss']['channel']['item'];

		if ($this->request->is('requested')) {
			return array($feedInfo, $data);
		} else {
			$this->set('feedInfo', $feedInfo);
			$this->set('data', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * @param string $feedID
 * @return array|bool|null
 */
	public function view_development($feedID = '') {
		if ($feedID != '') {
			if ((Configure::read('globals.developmentfeed.' . $feedID ) != null)) {
				$feedDetails = Configure::read('globals.developmentfeed.' . $feedID);
				$this->feedURL = $feedDetails[0];
			} else {
				return false;
			}
		}

		$parsedXML = Xml::build($this->feedURL);

		// xml to array conversion
		$this->rssItem = Xml::toArray($parsedXML);

		//pr($this->rssItem);

		$feedInfo = $this->rssItem['feed'];
		$data = $this->rssItem['feed']['entry'];

		//pr($feedInfo);
		//pr($data);

		if ($this->request->is('requested')) {
			return array($feedInfo, $data);
		} else {
			$this->set('feedInfo', $feedInfo);
			$this->set('data', $data);
		}
		return null;
	}

}
