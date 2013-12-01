<?php
$this->Html->addCrumb('License', 'license');
$this->Html->addCrumb('Server Test', 'server_test');
?>

<div class="page-header">
	<h1>
		<?php echo __('Installation'); ?>:
		<?php echo __('Running server test...'); ?>
	</h1>
</div>
<div class="row-fluid">
	<div class="span7">
		<?php if ($success): ?>
			<p class="alert alert-success"><i
					class="icon-large icon-ok-sign"></i> <?php echo __("Congratulations! Your server meets the basic software requirements."); ?>
			</p>
			<form action="" method="post">
				<input type="hidden" name="data[Test]" value="1"/>
				<fieldset class="install-button">
					<input class="submit btn btn-success" type="submit" value="<?php echo __('Continue'); ?>">
				</fieldset>
			</form>
		<?php else: ?>
			<p class="alert alert-error"><i
					class="icon-large icon-warning-sign"></i> <?php echo __("Oops. There's a server compatibility issue. See below."); ?>
			</p>
			<ul>
				<?php foreach ($tests as $name => $testNode): ?>
					<?php if (!$testNode['test']): ?>
						<li><em><?php echo $testNode['msg']; ?></em><br/></li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
			<p class="alert alert-info">
				<?php echo __('Please fix the issues above and click the button below to check again. Contact your hosting provider if you don\'t know how.'); ?>
			</p>
			<?php echo $this->Html->link(__('Check Again'), array(
					'controller' => 'install',
					'action' => 'server_test'
				),
				array(
					'class' => 'btn btn-info btn-block'
				)
			);?>
		<?php endif; ?>
	</div>
	<div class="span5 well pull-right">
		<h4><?php echo __('This would be a good moment to acquire a license key!'); ?></h4>
		<p><?php echo __('XLRstats is no longer licensed under GPL, but under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">
				Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported (CC BY-NC-SA 3.0)</a> License.</p>'); ?>

		<p>
			<?php echo $this->Html->link(__('FREE for Non-commercial use!'),
				'http://www.xlrstats.com/license_server/licenses/add/free',
				array(
					'class' => 'btn btn-success btn-block',
					'target' => '_blank'
				)
			); ?>
		</p>

		<p>
			<?php echo $this->Html->link(__('NOT FREE for Commercial use!'),
				'http://www.xlrstats.com/license_server/licenses/add/commercial',
				array(
					'class' => 'btn btn-danger btn-block',
					'target' => '_blank'
				)
			); ?>
		</p>

		<p>
			<?php echo __('Clicking one of the buttons above will take you to our key generator. Fill out the
			registration form and a key will be emailed to you. You\'ll need the key later.'); ?>
		</p>
	</div>

</div>
