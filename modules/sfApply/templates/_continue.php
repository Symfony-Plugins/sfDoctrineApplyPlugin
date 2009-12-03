<p>
<?php echo link_to(__("Continue"), $sf_user->isAuthenticated() ? sfConfig::get('app_sfApplyPlugin_afterLogin', sfConfig::get('app_sfApplyPlugin_after', '@homepage')) : sfConfig::get('app_sfApplyPlugin_after', '@homepage')) ?>
</p>
