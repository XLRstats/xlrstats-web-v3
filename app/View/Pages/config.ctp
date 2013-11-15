<?php

echo '<h3>Cakephp version: ' . Configure::version() . '</h3>';

//echo '<h4>Available Config Readers:</h4>';
//pr(Configure::configured());

//Configure::dump('xlr_test.php', 'xlrstats', array('league', 'level', 'globals'));
//Configure::dump('test.php', 'default');

App::uses('Folder', 'Utility');
$dir = new Folder(APP.'Config');
$files = $dir->findRecursive('xlr.*');

Cache::clear();

if (Configure::read('debug') > 0) {
	Configure::dump('xlr_config_dump.php', 'xlrstats');
}

//
//pr(Configure::read('globals'));


echo '<div class="accordion" id="accordion2">';
//----------------------------------------------------------------------------------------------------------------------

echo '  <div class="accordion-group">';
echo '    <div class="accordion-heading">';
echo '      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">';
echo '	Leagues';
echo '	</a>';
echo '    </div>';
echo '    <div id="collapseOne" class="accordion-body collapse">';
echo '      <div class="accordion-inner">';

foreach (Configure::read('league') as $id => $league):
	echo $this->Html->link($league[3], array(
			'controller'	=> 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), 'league' => $id
		)
	) . ': ' . $league[1] . ' to ' . $league[2] . ' ' . $league[0] . '.<br />';
endforeach;

echo '      </div>';
echo '    </div>';
echo '  </div>';

//----------------------------------------------------------------------------------------------------------------------

echo '  <div class="accordion-group">';
echo '    <div class="accordion-heading">';
echo '      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">';
echo '	Levels';
echo '	</a>';
echo '    </div>';
echo '    <div id="collapseTwo" class="accordion-body collapse">';
echo '      <div class="accordion-inner">';

foreach (Configure::read('level') as $key => $level):
	echo $key  . ': ' . $level[1] . ' (group_bits: ' . $level[0] . ')<br />';
endforeach;

echo '      </div>';
echo '    </div>';
echo '  </div>';

//----------------------------------------------------------------------------------------------------------------------

echo '  <div class="accordion-group">';
echo '    <div class="accordion-heading">';
echo '      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">';
echo '	Ranks';
echo '	</a>';
echo '    </div>';
echo '    <div id="collapseThree" class="accordion-body collapse">';
echo '      <div class="accordion-inner">';

foreach (Configure::read('rank') as $key => $rank):
	echo $key  . ': ' . $rank[0] . ': (' . $rank[1] . '+ kills)<br />';
endforeach;

echo '      </div>';
echo '    </div>';
echo '  </div>';

//----------------------------------------------------------------------------------------------------------------------
echo '</div>';

