<?php use_helper('I18N') ?>
<?php slot('sf_apply_login') ?>
<?php end_slot() ?>
<div class="sf_apply sf_apply_reset_request">
<form method="POST" action="<?php echo url_for('sfApply/resetRequest') ?>"
  name="sf_apply_reset_request" id="sf_apply_reset_request">
<p>
<?php echo __(<<<EOM
Forgot your password? No problem! Just enter your username and
click "Reset My Password." A link permitting you to change
your password will then be sent to the email address associated with the
account.
EOM
) ?>
</p>
<ul>
<?php echo $form ?>
<li>
<input type="submit" value="<?php echo __("Reset My Password") ?>"> 
<?php echo __("or") ?> 
<?php echo link_to(__('Cancel'), sfConfig::get('app_sfApplyPlugin_after', '@homepage')) ?>
</li>
</ul>
</form>
</div>
