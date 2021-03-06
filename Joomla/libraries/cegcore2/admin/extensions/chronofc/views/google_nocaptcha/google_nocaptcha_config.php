<?php
/* @copyright:ChronoEngine.com @license:GPLv2 */defined('_JEXEC') or die('Restricted access');
defined("GCORE_SITE") or die;
?>
<div class="ui segment tab views-tab active" data-tab="view-<?php echo $n; ?>">
	
	<div class="ui top attached tabular menu small G2-tabs">
		<a class="item active" data-tab="view-<?php echo $n; ?>-general"><?php el('General'); ?></a>
		<a class="item" data-tab="view-<?php echo $n; ?>-permissions"><?php el('Permissions'); ?></a>
	</div>
	
	<div class="ui bottom attached tab segment active" data-tab="view-<?php echo $n; ?>-general">
		<input type="hidden" value="google_nocaptcha" name="Connection[views][<?php echo $n; ?>][type]">
		
		<div class="two fields advanced_conf">
			<div class="field">
				<label><?php el('Name'); ?></label>
				<input type="text" value="" name="Connection[views][<?php echo $n; ?>][name]">
			</div>
			<div class="field">
				<label><?php el('Category'); ?></label>
				<input type="text" value="" name="Connection[views][<?php echo $n; ?>][category]">
			</div>
		</div>
		
		<div class="field">
			<label><?php el('Label'); ?></label>
			<input type="text" value="" name="Connection[views][<?php echo $n; ?>][label]">
		</div>
		
		<div class="field required">
			<label><?php el('Site key'); ?></label>
			<input type="text" value="" placeholder="<?php el('Get this from Google'); ?>" name="Connection[views][<?php echo $n; ?>][site_key]">
		</div>
		<div class="field required">
			<label><?php el('Secret key'); ?></label>
			<input type="text" value="" placeholder="<?php el('Get this from Google'); ?>" name="Connection[views][<?php echo $n; ?>][secret_key]">
		</div>
		<div class="field required">
			<label><?php el('Error message'); ?></label>
			<input type="text" value="You didn't pass the NoCaptcha verification." name="Connection[views][<?php echo $n; ?>][failed_error]">
			<small><?php el('Error message to display when the recaptcha check fails'); ?></small>
		</div>
		
		<div class="two fields">
			<div class="field">
				<label><?php el('Theme'); ?></label>
				<input type="text" value="light" name="Connection[views][<?php echo $n; ?>][theme]">
			</div>
			<div class="field">
				<label><?php el('Lang code'); ?></label>
				<input type="text" value="{language:short}" name="Connection[views][<?php echo $n; ?>][lang]">
			</div>
		</div>
		
	</div>
	
	<div class="ui bottom attached tab segment" data-tab="view-<?php echo $n; ?>-permissions">
		<?php $this->view('views.config_permissions', ['type' => 'views', 'n' => $n]); ?>
	</div>
	
	<button type="button" class="ui button compact red tiny close_config forms_conf forms_conf"><?php el('Close'); ?></button>
</div>