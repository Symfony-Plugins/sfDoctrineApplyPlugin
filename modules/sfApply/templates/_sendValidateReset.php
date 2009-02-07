<?php use_helper('I18N', 'Url') ?>
<?php echo __(<<<EOM
<p>
We have received your request to reset your password on 
%1%.
</p>
<p>
To do that, just click on the link that follows:
</p>
<p>
%2%
</p>
<p>
You will then be prompted for the new password you wish to use.
</p>
<p>
IF YOU DID NOT SEND THIS REQUEST: don't worry, your password
will NOT be changed unless you confirm the request by clicking
on the link above. You may safely ignore this email.
</p>
<p>
This confirmation process is necessary to prevent abuses of
the system and protect your privacy. Thanks for your time and 
for your patience with this process!
</p>
EOM
, array("%1%" => link_to($sf_request->getHost(), $sf_request->getUriPrefix()),
  "%2%" => link_to(url_for("sfApply/confirm?validate=$validate", true), "sfApply/confirm?validate=$validate", array("absolute" => true)))) ?>

