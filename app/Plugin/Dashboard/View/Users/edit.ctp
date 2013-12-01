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
 * @package       app.Plugin.Dashboard.View.Users
 * @since         XLRstats v3.0
 * @version       0.1
 */

// Calculate a unique player token for identification purposes.
$token = substr(md5(AuthComponent::user('email')), null, 8);

// Check if we have a saved playertoken
$profile = false;
if (isset($this->request->data['UserDetail']['playertoken'])) {
	$profile = true;
}

echo $this->TwitterBootstrap->page_header('Player Profile Page');
?>

<div class="row">
    <div class="span6">
        <blockquote>
            <h3>Player Identification</h3>
			Your 'Player Identifier Token' is:&nbsp;
			<?php echo $this->Html->link('<span class="label label-important">' . $token . '</span>', '#tokenHelp', array(
			'data-toggle' => 'modal',
			'rel' => 'tooltip',
			'data-original-title' => __('Click for help on how to use your Token'),
			'escape' => false
		)) ?>
        </blockquote>
    </div>
	<div class="span5 pull-right">

			<?php //Todo: Need to add playername to my soldiers list in profile page
			$mySoldiers = $this->requestAction('user_soldiers/listing/' . $user['User']['id']);
			if (empty($mySoldiers)) {
				echo '<h3>' . __('You have no Identified Soldiers (yet)') . '</h3>';
				echo '<p>';
				echo __('Want to know how to get identified? Click the red \'Player Identifier Token\' on the left.');
				echo '</p>';
			} else {
				echo '<h3>' . __('Identified Soldiers') . '</h3>';
				echo '<ul>';
				foreach ($mySoldiers as $soldier) {
					//pr($soldier);
					$gameIcon = $this->Html->image('ico/icon_' . $soldier['Server']['gamename'] . '.gif');
					echo '<li>';
					echo $this->Html->link($gameIcon . ' ' . $soldier['Server']['servername'], array(
							'plugin' => null,
							'controller' => 'player_stats',
							'action' => 'view',
							$soldier['UserSoldier']['playerstats_id'],
							'server' => $soldier['UserSoldier']['server_id']), array(
							'escape' => false
						)
					);
					echo ' - ';
					echo $this->Form->postLink(' <i class="icon-trash"></i> ', array(
						'plugin' => null,
						'controller' => 'user_soldiers',
						'action' => 'delete',
						$soldier['UserSoldier']['id']
					), array(
						'escape' => false,
						'rel' => 'tooltip',
						'data-original-title' => __('Delete')
						), __('Are you sure you want to delete your soldier at %s?', $soldier['Server']['servername']));
					echo '</li>';
				}
				echo '</ul>';
			}
			?>
	</div>
</div>


<!-- Modal -->
<div id="tokenHelp" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="tokenHelpLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="tokenHelpLabel">Player Identification Help</h3>
	</div>
	<div class="modal-body">
		<p><strong>You can use this token in a B3 enable server to connect your player account to this website profile.</strong></p>
		<ul>
			<li>Connect to the gameserver and type in chat: <code>!xlrid <?php echo $token ?></code><br/>
				- You will now have access to the extra (private) Tabs on your personal playerstats page.<br/><br/>
			</li>
			<li>Once identified you can bookmark your playerpage(s) and add the account to your "My Soldiers" list.
				Click the <span class="label label-success">Finish Identification</span> button on your playerstats page.
				<small>(Only available after registration and identification</small>
				)
			</li>
		</ul>
		<p><strong>This 'Player Identification Token' is valid (and the same) for all servers in this community!</strong></p>

	</div>
</div>
<!-- /Modal -->


<div class="users form">
	<?php echo $this->Form->create($model, array(
			'url' => array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'edit'),
		)
	); ?>
	<fieldset>
		<legend><?php echo __d('users', 'Edit Public Profile'); ?></legend>
		<blockquote class="text-warning">These profile settings are public and make it easy for others to find or
			contact you.
		</blockquote>
		<?php
		echo '<p>' . __('Gravatar') . '</p>';
		$gravatarLink = $this->Html->link('Gravatar',
			'http://www.gravatar.com',
			array(
				'target' => '_blank',
				'escape' => false
			)
		);

		$options = array('size' => 120, 'rating' => 'g');
		echo '<p>' . $this->Html->link($this->Gravatar->image($user['User']['email'], $options,
			array(
				'alt' => 'Gravatar',
				'rel' => 'tooltip',
				'data-original-title' => 'Get your own Gravatar',
				'class' => 'img-polaroid',
			)),
			'http://www.gravatar.com',
			array(
				'target' => '_blank',
				'escape' => false
			)
		) . '</p>';
		echo '<small>' . __('Avatars are powered by Gravatar. To sign up for a free avatar, please visit %s', $gravatarLink) . '</small><hr>';

		echo $this->Form->input('UserDetail.clan_tag', array(
			'class' => 'input-mini',
			'placeholder' => 'ClanTag',
			'between' => '<div class="input-prepend input-append"><span class="add-on">[</span>',
			'after' => '<span class="add-on">]</span></div>'
		));
		echo $this->Form->input('UserDetail.public_email', array(
			'type' => 'email'
		));
		echo '<small>This email address can be different from your registration email</small><hr>';
		echo $this->Form->input('UserDetail.origin_account');
		echo $this->Form->input('UserDetail.steam_account');
		echo $this->Form->input('UserDetail.facebook');
		echo $this->Form->input('UserDetail.googleplus', array(
			'label' => 'Google+'
		));
		echo $this->Form->input('UserDetail.twitter');

		echo $this->Form->hidden('UserDetail.playertoken', array(
			'default' => $token,
			'label' => 'Player Identifier Token'
		));
		?>
		<p>
			<?php echo $this->Html->link(__d('users', 'Change your password'), array('action' => 'change_password')); ?>
		</p>
	</fieldset>
	<?php echo $this->Form->end(__d('users', 'Submit')); ?>
</div>