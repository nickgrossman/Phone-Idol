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
#
# Initial Intro
#
?>

  <Play><?php bloginfo('template_directory'); ?>/music_makers.mp3</Play>
  <Say voice="woman">Welcome to Phone Idol!
  </Say>
  <Gather action="<?php bloginfo('template_directory'); ?>/twilio-record.php">
    <Say voice="woman">If you're ready to sing, press 1.</Say>
    <Say voice="woman">If you're too scared, press 2.</Say>
  </Gather>

</Response>