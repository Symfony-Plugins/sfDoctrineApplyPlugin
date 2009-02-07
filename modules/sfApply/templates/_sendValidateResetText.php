<?php use_helper('I18N', 'Url') ?>
<?php echo __(<<<EOM
We have received your request to reset your password on 
%1%.

To do that, just click on the link that follows:

%2%

You will then be prompted for the new password you wish to use.

IF YOU DID NOT SEND THIS REQUEST: don't worry, your password
will NOT be changed unless you confirm the request by clicking
on the link above. You may safely ignore this email.

This confirmation process is necessary to prevent abuses of
the system and protect your privacy. Thanks for your time and 
for your patience with this process!
EOM
, array("%1%" => url_for($sf_request->getUriPrefix()),
  "%2%" => url_for("sfApply/confirm?validate=$validate", true))) ?>

