<?php use_helper('I18N') ?>
<div class="sf_apply_notice">
<p>
<?php echo __("Thank you for confirming your account! You are now logged into the site.") ?>
</p>
<p>
<?php echo link_to(__("Continue"), sfConfig::get('app_sfApplyPlugin_after', '@homepage')) ?>
</p>
</div>
