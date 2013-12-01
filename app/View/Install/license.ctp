<?php
$this->Html->addCrumb('License', 'license');
?>


<div class="page-header">
	<h1>
		<?php echo __('Installation'); ?>:
		<?php echo __('License Agreement'); ?>
	</h1>
</div>
<p><em><?php echo __('Please read and agree to the following license agreement before installing.'); ?></em></p>

<iframe src="http://creativecommons.org/licenses/by-nc-sa/3.0/" name="data[License][text]" style="height:1350px;width:800px;"></iframe>
<form action="" method="post">
	<input type="submit" value="<?php echo __('I Agree'); ?>" class="submit btn btn-success" name="data[License][accept]" />
	<a href="http://www.xlrstats.com/pages/xlrstats.com/licensing" class="btn btn-danger"><?php echo __('I Don\'t Agree'); ?></a>
</form>
