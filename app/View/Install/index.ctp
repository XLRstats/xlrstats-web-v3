

<div class="page-header">
	<h1><?php echo __('Installation'); ?></h1>
</div>
<p><em>Welcome to the XLRstats v3 Installer. You're about to start the installation process which will install the XLRstats webfront on your server.</em></p>
<p>
	<?php
	echo $this->Html->link(__('Start Installation'), array('plugin' => null, 'admin' => null, 'controller' => 'install', 'action' => 'license'), array('class' => 'btn btn-success'));
	?>
</p>