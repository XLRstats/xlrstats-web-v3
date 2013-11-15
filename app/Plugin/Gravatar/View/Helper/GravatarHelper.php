<?php 
/**
 * Gravatar Helper
 *
 * @author Hayden Harnett
 * @version 1.1
 * @lastupdated 20091002
 * @url http://hayden.id.au/
 */

/**
 * Import the Security Component
 */
App::import(array('Security'));

class GravatarHelper extends AppHelper {
	/**
	 * Array of helpers needed
	 *
	 * @var array
	 */
	public $helpers = array('Html');
	
	/**
	 * Base gravatar url
	 *
	 * @var string
	 */
	private $_url = 'http://www.gravatar.com/avatar/';
	
	/**
	 * Size of the image
	 *
	 * @var string
	 */
	private $_size = 80;
	
	/**
	 * Gravatar rating
	 *
	 * @var string
	 */
	private $_rating = 'pg';
	
	/**
	 * Array of possible ratings
	 *
	 * @var string
	 */
	private $_possibleRatings = array('g', 'pg', 'r', 'x');
	
	/**
	 * Default email hash
	 *
	 * @var string
	 */
	private $_default = 'mm';
	
	/**
	 * Hash type used
	 *
	 * @var string
	 */
	private $_hashType = 'md5';
	
	/**
	 * Validate the options array
	 *
	 * @param string $options 
	 * @return void
	 * @author Hayden Harnett
	 */
	private function _validateOptions($options)
	{
		if (isset($options['rating']))
		{
			if (in_array($this->_rating, $this->_possibleRatings))
			{
				$this->_rating = $options['rating'];
			}
		}
			
		if (isset($options['size']))
		{
			if (is_numeric($options['size']) && $options['size'] >=1 && $options['size'] <= 512)
			{
				$this->_size = $options['size'];
			}
		}
		
		if (isset($options['default']))
		{
			if (strpos('http://', $options['default']) == 0 || strpos('https://', $options['default'] == 0))
			{
				$this->_default = h($options['default']);
			}
			else
			{
				$this->_default = _hashEmail($options['default']);
			}
		}
	}
	
	/**
	 * Hash the email address
	 *
	 * @param string $email 
	 * @return hash
	 * @author Hayden Harnett
	 */
	private function _hashEmail($email)
	{
		return Security::hash(strtolower($email), $this->_hashType);
	}

	/**
	 * undocumented function
	 *
	 * @param string $email
	 * @param string $options
	 * @param array|string $html_options
	 * @return HTML image tag of the gravatar
	 * @author Hayden Harnett
	 */
	public function image($email, $options, $html_options = array())
	{
		$this->_validateOptions($options);
		
		$get = "?s=".$this->_size."&r=".$this->_rating;
		
		if (!empty($this->_default))
		{
			$get .= "&d=".$this->_default;
		}
		return $this->Html->image($this->_url.$this->_hashEmail($email).$get, $html_options);
	}	
}
?>