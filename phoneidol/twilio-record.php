<?php
  #
  # This file will be called directly from twilio. 
  # so we need to include wp-config directly.
  #
  require('../../wp-config.php');
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>

  
<?php 
if ($_REQUEST['Digits'] == 2): 
#
# They pressed #2.  They're scared.
#  
?>

<Say voice="woman">Ok, thanks anyway.  Check out Phone dash Idol dot com to hear what paople are singing.  Goodbye.</Say>

<?php 
elseif($_REQUEST['Digits'] == 1):
#
# They pressed 1.  They want to sing.
#
?>

	<Say voice="woman">You get 30 seconds to sing.  Press the pound key when you're finished. Ready, set, go!</Say>
	<Record maxLength="35" finishOnKey="#" action="<?php bloginfo('template_directory'); ?>/twilio-save.php"></Record>
	

<?php 
#
# The end.
#
endif; 
?>

</Response>